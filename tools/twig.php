#!/usr/bin/php
<?php

require_once __DIR__.'/../vendor/autoload.php';

class TwigRenderCommand extends \Symfony\Component\Console\Command\Command
{
    /* @var Twig_Environment */
    private $twig;

    protected function configure()
    {
        $this
            ->setName('render')
            ->setDescription('Renders a template')
        ;
    }

    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $output->write('<comment>Writing settings.html...');
        $settings = $this->twig->render(
            'settings.html.twig'
        );
        file_put_contents(__DIR__ . '/../build/settings.html', $settings);
        $output->writeln('Done.</comment>');

        foreach ($this->twig->getExtension('paxal.desktop_keyboard')->getGlobals() as $name => $keyboard) {
            $output->write(sprintf('<comment>Writing index_%s.html...', $name));
            $index = $this->twig->render(
                'index.html.twig',
                ['keyboardName' => $name]
            );
            file_put_contents(sprintf(__DIR__ . '/../build/index_%s.html', $name), $index);
            $output->writeln('Done.</comment>');
        }
    }

    protected function initialize(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $loader = new Twig_Loader_Filesystem(__DIR__ . '/../src/html/');

        $this->twig = new Twig_Environment(
            $loader,
            array(
                'cache' => false,
                'strict_variables' => true,
                'optimizations' => 0,
                'debug' => true,
            )
        );

        $this->twig->addExtension(
            new \Paxal\DesktopKeyboard\Twig\Extension([
                new \Paxal\DesktopKeyboard\Boards\EnUs(),
                new \Paxal\DesktopKeyboard\Boards\FrFr(),
            ])
        );

        $this->twig->addExtension(
            new Twig_Extension_Debug()
        );
    }
}

$app = new \Symfony\Component\Console\Application();

$twigCommand = new TwigRenderCommand();
$app->add($twigCommand);
$app->setDefaultCommand($twigCommand->getName());

$app->run();
