<?php

namespace Paxal\DesktopKeyboard\Key\StaticKey;

use Paxal\DesktopKeyboard\Key\KeyCode;

final class Backspace extends KeyCode
{
    public function __construct()
    {
        parent::__construct('backspace', '⌫', 8);
    }
}
