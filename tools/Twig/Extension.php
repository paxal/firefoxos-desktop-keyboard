<?php

namespace Paxal\DesktopKeyboard\Twig;

class Extension extends \Twig_Extension
{
    protected $keyboards;

    public function __construct(array $keyboards)
    {
        $this->keyboards = $keyboards;
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'paxal.desktop_keyboard';
    }

    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('getKeyboard', [$this, 'getKeyboard'])
        ];
    }

    public function getGlobals()
    {
        return array_combine(
            array_map(
                function ($keyboard) {
                    return $keyboard->getName();
                },
                $this->keyboards
            ),
            $this->keyboards
        );
    }

    public function getKeyboard($keyboardName)
    {
        return $this->getGlobals()[$keyboardName];
    }
}
