<?php

namespace Paxal\DesktopKeyboard\Key;

class Modifier extends AbstractKey
{
    protected $name;
    protected $modifier;

    /**
     * Constructor
     *
     * @param string $name
     * @param string $text
     * @param int    $modifier
     */
    public function __construct($name, $text, $modifier)
    {
        parent::__construct($name, $text);
        $this->modifier = $modifier;
    }

    /**
     * Get key name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getClasses()
    {
        return ['modifier', 'toggle'];
    }

    public function getDataAttributes()
    {
        return [
            'modifier' => $this->modifier,
            'toggle' => 0
        ];
    }
}
