<?php

namespace Paxal\DesktopKeyboard\Boards;

use Paxal\DesktopKeyboard\Key\CharCode;
use Paxal\DesktopKeyboard\Key\FKey;
use Paxal\DesktopKeyboard\Key\KeyCode;
use Paxal\DesktopKeyboard\Key\Special;
use Paxal\DesktopKeyboard\Key\StaticKey\Backspace;
use Paxal\DesktopKeyboard\KeyCodes;

class EnUs extends Common
{
    public function getName()
    {
        return 'en-us';
    }

    public function getAlpha()
    {
        return [
            CharCode::listFromString('qwertyuiop'),
            CharCode::listFromString('asdfghjkl'),
            array_merge(
                CharCode::listFromString('zxcvbnm/'),
                [ new Backspace() ]
            )
        ];
    }

}
