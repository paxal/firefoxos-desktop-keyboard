<?php

namespace Paxal\DesktopKeyboard\Boards;

use Paxal\DesktopKeyboard\Key\AbstractKey;
use Paxal\DesktopKeyboard\Key\CharCode;
use Paxal\DesktopKeyboard\Key\FKey;
use Paxal\DesktopKeyboard\Key\KeyCode;
use Paxal\DesktopKeyboard\Key\Modifier;
use Paxal\DesktopKeyboard\Key\Special;
use Paxal\DesktopKeyboard\Key\StaticKey\Backspace;
use Paxal\DesktopKeyboard\KeyCodes;

abstract class Common
{
    abstract public function getName();
    abstract public function getAlpha();

    /**
     * @return AbstractKey[]
     */
    public function getTop()
    {
        return [
            new Modifier('alt', 'Alt', 0x0001),
            new Modifier('ctrl', 'Ctrl', 0x0002),
            new Modifier('shift', 'Shift', 0x0004),
            new Modifier('meta', 'Meta', 0x0008),
            new Special('spacer', 'spacer'),
            new KeyCode('tab', '⇄', 0x09),
            new KeyCode('up', '⬆', KeyCodes::DOM_VK_UP),
            new KeyCode('left', '⬅', KeyCodes::DOM_VK_LEFT),
            new KeyCode('down', '⬇', KeyCodes::DOM_VK_DOWN),
            new KeyCode('right', '➡', KeyCodes::DOM_VK_RIGHT),
        ];
    }

    /**
     * @return AbstractKey[]
     */
    public function getBottom()
    {
        return [
            new Special('123', '123'),
            new Special('abc', 'ABC'),
            new Special('world', '⏏'),
            new CharCode('spacebar', ' '),
            new CharCode('dot', '.'),
            new KeyCode('return', '⏎', KeyCodes::DOM_VK_RETURN)
        ];
    }

    /**
     * @return array
     */
    public function getPanels()
    {
        return [
            'alpha' => $this->getAlpha(),
            '123' => [
                CharCode::listFromString('1234567890'),
                CharCode::listFromString('@#$&*-_/()'),
                array_merge(
                    [ new Special('panel_123_alt_1', 'ALT') ],
                    CharCode::listFromString(',:;"\'!?'),
                    [ new Backspace() ]
                )
            ],
            '123_alt_1' => [
                [ new FKey(1), new FKey(2), new FKey(3), new FKey(4), new FKey(5), new FKey(6), new FKey(7), new FKey(8), new FKey(9), new FKey(10) ],
                [
                    new FKey(11),
                    new FKey(12),
                    new KeyCode('ins', 'Ins', KeyCodes::DOM_VK_INSERT),
                    new KeyCode('home', '↖', KeyCodes::DOM_VK_HOME),
                    new KeyCode('end', 'End', KeyCodes::DOM_VK_END),
                    new KeyCode('page_up', '⤊', KeyCodes::DOM_VK_PAGE_UP),
                    new KeyCode('page_down', '⤋', KeyCodes::DOM_VK_PAGE_DOWN),
                    CharCode::fromChar('<'),
                    CharCode::fromChar('>'),
                    CharCode::fromChar('{'),
                    CharCode::fromChar('}')
                ],
                array_merge(
                    [ new Special('panel_123', '123'), new KeyCode('esc', 'Esc', KeyCodes::DOM_VK_ESCAPE) ],
                    CharCode::listFromString('+=`^%'),
                    [ new KeyCode('del', 'Del', KeyCodes::DOM_VK_DELETE), new Backspace() ]
                )
            ]
        ];
    }
}
