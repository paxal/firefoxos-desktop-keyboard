<?php

namespace Paxal\DesktopKeyboard\Key;

class KeyCode extends AbstractKey
{
    protected $keyCode;

    /**
     * Constructor
     *
     * @param string $name
     * @param string $text
     * @param int    $keyCode
     */
    public function __construct($name, $text, $keyCode)
    {
        parent::__construct($name, $text);
        $this->keyCode = $keyCode;
    }

    public function getClasses()
    {
        return [ ];
    }

    public function getDataAttributes()
    {
        return [
            'keycode' => $this->keyCode
        ];
    }
}
