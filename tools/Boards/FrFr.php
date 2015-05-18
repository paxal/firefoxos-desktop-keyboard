<?php

namespace Paxal\DesktopKeyboard\Boards;

use Paxal\DesktopKeyboard\Key\CharCode;
use Paxal\DesktopKeyboard\Key\FKey;
use Paxal\DesktopKeyboard\Key\KeyCode;
use Paxal\DesktopKeyboard\Key\Special;
use Paxal\DesktopKeyboard\Key\StaticKey\Backspace;
use Paxal\DesktopKeyboard\KeyCodes;

class FrFr extends Common
{
    public function getName()
    {
        return 'fr-fr';
    }

    public function getAlpha()
    {
        return [
            CharCode::listFromString('azertyuiop'),
            CharCode::listFromString('qsdfghjklm'),
            array_merge(
                CharCode::listFromString('wxcvbn/'),
                [ new Backspace() ]
            )
        ];
    }

}
