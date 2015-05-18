<?php

namespace Paxal\DesktopKeyboard\Key;

abstract class AbstractKey
{
    protected $name;
    protected $text;

    public function __construct($name, $text = '')
    {
        $this->name = $name;
        $this->text = $text;
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

    /**
     * Get text description
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Get classes
     *
     * @return array
     */
    public function getClasses()
    {
        return [];
    }

    /**
     * Get data attributes. Returns name => value that will be replaced with
     * data-name="value".
     *
     * @return array
     */
    public function getDataAttributes()
    {
        return [];
    }
}
