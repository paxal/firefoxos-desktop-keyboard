<?php

namespace Paxal\DesktopKeyboard\Key;

use Paxal\DesktopKeyboard\KeyCodes;

class FKey extends KeyCode
{
    /**
     * Constructor
     *
     * @param int $i
     */
    public function __construct($i)
    {
        parent::__construct('F'.$i, 'F'.$i, KeyCodes::DOM_VK_F1 - 1 + $i);
    }
}
