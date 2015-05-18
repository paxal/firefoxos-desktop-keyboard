<?php

namespace Paxal\DesktopKeyboard;

class KeyCodes
{
    const DOM_VK_CANCEL         = 0x03;
    const DOM_VK_HELP           = 0x06;
    const DOM_VK_BACK_SPACE     = 0x08;
    const DOM_VK_TAB            = 0x09;
    const DOM_VK_CLEAR          = 0x0C;
    const DOM_VK_RETURN         = 0x0D;
    // DOM_VK_ENTER has been never used for representing native key events.
    // Therefore, it's removed for preventing developers being confused.
    // const DOM_VK_ENTER          = 0x0E;
    const DOM_VK_SHIFT          = 0x10;
    const DOM_VK_CONTROL        = 0x11;
    const DOM_VK_ALT            = 0x12;
    const DOM_VK_PAUSE          = 0x13;
    const DOM_VK_CAPS_LOCK      = 0x14;
    const DOM_VK_KANA           = 0x15;
    const DOM_VK_HANGUL         = 0x15;
    const DOM_VK_EISU           = 0x16; // Japanese Mac keyboard only
    const DOM_VK_JUNJA          = 0x17;
    const DOM_VK_FINAL          = 0x18;
    const DOM_VK_HANJA          = 0x19;
    const DOM_VK_KANJI          = 0x19;
    const DOM_VK_ESCAPE         = 0x1B;
    const DOM_VK_CONVERT        = 0x1C;
    const DOM_VK_NONCONVERT     = 0x1D;
    const DOM_VK_ACCEPT         = 0x1E;
    const DOM_VK_MODECHANGE     = 0x1F;
    const DOM_VK_SPACE          = 0x20;
    const DOM_VK_PAGE_UP        = 0x21;
    const DOM_VK_PAGE_DOWN      = 0x22;
    const DOM_VK_END            = 0x23;
    const DOM_VK_HOME           = 0x24;
    const DOM_VK_LEFT           = 0x25;
    const DOM_VK_UP             = 0x26;
    const DOM_VK_RIGHT          = 0x27;
    const DOM_VK_DOWN           = 0x28;
    const DOM_VK_SELECT         = 0x29;
    const DOM_VK_PRINT          = 0x2A;
    const DOM_VK_EXECUTE        = 0x2B;
    const DOM_VK_PRINTSCREEN    = 0x2C;
    const DOM_VK_INSERT         = 0x2D;
    const DOM_VK_DELETE         = 0x2E;

    // DOM_VK_0 - DOM_VK_9 match their ascii values
    const DOM_VK_0              = 0x30;
    const DOM_VK_1              = 0x31;
    const DOM_VK_2              = 0x32;
    const DOM_VK_3              = 0x33;
    const DOM_VK_4              = 0x34;
    const DOM_VK_5              = 0x35;
    const DOM_VK_6              = 0x36;
    const DOM_VK_7              = 0x37;
    const DOM_VK_8              = 0x38;
    const DOM_VK_9              = 0x39;

    const DOM_VK_COLON          = 0x3A;
    const DOM_VK_SEMICOLON      = 0x3B;
    const DOM_VK_LESS_THAN      = 0x3C;
    const DOM_VK_EQUALS         = 0x3D;
    const DOM_VK_GREATER_THAN   = 0x3E;
    const DOM_VK_QUESTION_MARK  = 0x3F;
    const DOM_VK_AT             = 0x40;

    // DOM_VK_A - DOM_VK_Z match their ascii values
    const DOM_VK_A              = 0x41;
    const DOM_VK_B              = 0x42;
    const DOM_VK_C              = 0x43;
    const DOM_VK_D              = 0x44;
    const DOM_VK_E              = 0x45;
    const DOM_VK_F              = 0x46;
    const DOM_VK_G              = 0x47;
    const DOM_VK_H              = 0x48;
    const DOM_VK_I              = 0x49;
    const DOM_VK_J              = 0x4A;
    const DOM_VK_K              = 0x4B;
    const DOM_VK_L              = 0x4C;
    const DOM_VK_M              = 0x4D;
    const DOM_VK_N              = 0x4E;
    const DOM_VK_O              = 0x4F;
    const DOM_VK_P              = 0x50;
    const DOM_VK_Q              = 0x51;
    const DOM_VK_R              = 0x52;
    const DOM_VK_S              = 0x53;
    const DOM_VK_T              = 0x54;
    const DOM_VK_U              = 0x55;
    const DOM_VK_V              = 0x56;
    const DOM_VK_W              = 0x57;
    const DOM_VK_X              = 0x58;
    const DOM_VK_Y              = 0x59;
    const DOM_VK_Z              = 0x5A;

    const DOM_VK_WIN            = 0x5B;
    const DOM_VK_CONTEXT_MENU   = 0x5D;
    const DOM_VK_SLEEP          = 0x5F;

    // Numpad keys
    const DOM_VK_NUMPAD0        = 0x60;
    const DOM_VK_NUMPAD1        = 0x61;
    const DOM_VK_NUMPAD2        = 0x62;
    const DOM_VK_NUMPAD3        = 0x63;
    const DOM_VK_NUMPAD4        = 0x64;
    const DOM_VK_NUMPAD5        = 0x65;
    const DOM_VK_NUMPAD6        = 0x66;
    const DOM_VK_NUMPAD7        = 0x67;
    const DOM_VK_NUMPAD8        = 0x68;
    const DOM_VK_NUMPAD9        = 0x69;
    const DOM_VK_MULTIPLY       = 0x6A;
    const DOM_VK_ADD            = 0x6B;
    const DOM_VK_SEPARATOR      = 0x6C;
    const DOM_VK_SUBTRACT       = 0x6D;
    const DOM_VK_DECIMAL        = 0x6E;
    const DOM_VK_DIVIDE         = 0x6F;

    const DOM_VK_F1             = 0x70;
    const DOM_VK_F2             = 0x71;
    const DOM_VK_F3             = 0x72;
    const DOM_VK_F4             = 0x73;
    const DOM_VK_F5             = 0x74;
    const DOM_VK_F6             = 0x75;
    const DOM_VK_F7             = 0x76;
    const DOM_VK_F8             = 0x77;
    const DOM_VK_F9             = 0x78;
    const DOM_VK_F10            = 0x79;
    const DOM_VK_F11            = 0x7A;
    const DOM_VK_F12            = 0x7B;
    const DOM_VK_F13            = 0x7C;
    const DOM_VK_F14            = 0x7D;
    const DOM_VK_F15            = 0x7E;
    const DOM_VK_F16            = 0x7F;
    const DOM_VK_F17            = 0x80;
    const DOM_VK_F18            = 0x81;
    const DOM_VK_F19            = 0x82;
    const DOM_VK_F20            = 0x83;
    const DOM_VK_F21            = 0x84;
    const DOM_VK_F22            = 0x85;
    const DOM_VK_F23            = 0x86;
    const DOM_VK_F24            = 0x87;

    const DOM_VK_NUM_LOCK       = 0x90;
    const DOM_VK_SCROLL_LOCK    = 0x91;

    // OEM specific virtual keyCode of Windows should pass through DOM keyCode
    // for compatibility with the other web browsers on Windows.
    const DOM_VK_WIN_OEM_FJ_JISHO   = 0x92;
    const DOM_VK_WIN_OEM_FJ_MASSHOU = 0x93;
    const DOM_VK_WIN_OEM_FJ_TOUROKU = 0x94;
    const DOM_VK_WIN_OEM_FJ_LOYA    = 0x95;
    const DOM_VK_WIN_OEM_FJ_ROYA    = 0x96;

    const DOM_VK_CIRCUMFLEX     = 0xA0;
    const DOM_VK_EXCLAMATION    = 0xA1;
    const DOM_VK_DOUBLE_QUOTE   = 0xA2;
    const DOM_VK_HASH           = 0xA3;
    const DOM_VK_DOLLAR         = 0xA4;
    const DOM_VK_PERCENT        = 0xA5;
    const DOM_VK_AMPERSAND      = 0xA6;
    const DOM_VK_UNDERSCORE     = 0xA7;
    const DOM_VK_OPEN_PAREN     = 0xA8;
    const DOM_VK_CLOSE_PAREN    = 0xA9;
    const DOM_VK_ASTERISK       = 0xAA;
    const DOM_VK_PLUS           = 0xAB;
    const DOM_VK_PIPE           = 0xAC;
    const DOM_VK_HYPHEN_MINUS   = 0xAD;

    const DOM_VK_OPEN_CURLY_BRACKET  = 0xAE;
    const DOM_VK_CLOSE_CURLY_BRACKET = 0xAF;

    const DOM_VK_TILDE          = 0xB0;

    const DOM_VK_VOLUME_MUTE    = 0xB5;
    const DOM_VK_VOLUME_DOWN    = 0xB6;
    const DOM_VK_VOLUME_UP      = 0xB7;

    const DOM_VK_COMMA          = 0xBC;
    const DOM_VK_PERIOD         = 0xBE;
    const DOM_VK_SLASH          = 0xBF;
    const DOM_VK_BACK_QUOTE     = 0xC0;
    const DOM_VK_OPEN_BRACKET   = 0xDB; // square bracket
    const DOM_VK_BACK_SLASH     = 0xDC;
    const DOM_VK_CLOSE_BRACKET  = 0xDD; // square bracket
    const DOM_VK_QUOTE          = 0xDE; // Apostrophe

    const DOM_VK_META           = 0xE0;
    const DOM_VK_ALTGR          = 0xE1;

    // OEM specific virtual keyCode of Windows should pass through DOM keyCode
    // for compatibility with the other web browsers on Windows.
    const DOM_VK_WIN_ICO_HELP    = 0xE3;
    const DOM_VK_WIN_ICO_00      = 0xE4;
    const DOM_VK_WIN_ICO_CLEAR   = 0xE6;
    const DOM_VK_WIN_OEM_RESET   = 0xE9;
    const DOM_VK_WIN_OEM_JUMP    = 0xEA;
    const DOM_VK_WIN_OEM_PA1     = 0xEB;
    const DOM_VK_WIN_OEM_PA2     = 0xEC;
    const DOM_VK_WIN_OEM_PA3     = 0xED;
    const DOM_VK_WIN_OEM_WSCTRL  = 0xEE;
    const DOM_VK_WIN_OEM_CUSEL   = 0xEF;
    const DOM_VK_WIN_OEM_ATTN    = 0xF0;
    const DOM_VK_WIN_OEM_FINISH  = 0xF1;
    const DOM_VK_WIN_OEM_COPY    = 0xF2;
    const DOM_VK_WIN_OEM_AUTO    = 0xF3;
    const DOM_VK_WIN_OEM_ENLW    = 0xF4;
    const DOM_VK_WIN_OEM_BACKTAB = 0xF5;

    // Following keys are not used on most keyboards.  However, for compatibility
    // with other browsers on Windows, we should define them.
    const DOM_VK_ATTN           = 0xF6;
    const DOM_VK_CRSEL          = 0xF7;
    const DOM_VK_EXSEL          = 0xF8;
    const DOM_VK_EREOF          = 0xF9;
    const DOM_VK_PLAY           = 0xFA;
    const DOM_VK_ZOOM           = 0xFB;
    const DOM_VK_PA1            = 0xFD;

    // OEM specific virtual keyCode of Windows should pass through DOM keyCode
    // for compatibility with the other web browsers on Windows.
    const DOM_VK_WIN_OEM_CLEAR  = 0xFE;
}
