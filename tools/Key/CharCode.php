<?php

namespace Paxal\DesktopKeyboard\Key;

class CharCode extends AbstractKey
{
    protected $charCode;

    /**
     * Constructor
     *
     * @param string     $name
     * @param string     $text
     * @param string|int $charCode
     */
    public function __construct($name, $text, $charCode = null)
    {
        parent::__construct($name, $text);

        if (null === $charCode) {
            $charCode = $text;
        }

        if (is_string($charCode) && strlen($charCode) === 1) {
            $charCode = ord($charCode);
        }

        if (!is_integer($charCode)) {
            throw new \InvalidArgumentException();
        }

        $this->charCode = $charCode;
    }

    public function getDataAttributes()
    {
        return [ 'charcode' => $this->charCode ];
    }

    /**
     * Build char codes from string
     *
     * @param string $charcodes
     *
     * @return $this[]
     */
    public static function listFromString($charcodes)
    {
        $list = [];
        for ($i=0; $i<strlen($charcodes); $i++) {
            $list[] = static::fromChar($charcodes[$i]);
        }

        return $list;
    }

    /**
     * Build char code from char (1-length string)
     *
     * @param $char
     *
     * @return $this
     */
    public static function fromChar($char)
    {
        return new self($char, $char, ord($char));
    }
}
