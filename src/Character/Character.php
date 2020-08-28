<?php


namespace Src\Character;


use Src\StringValueObject\StringValueObject;

class Character implements StringValueObject
{
    private string $character;

    public function __construct(string $character)
    {
        $this->character = $character;
    }

    /**
     * @return string
     */
    public function getCharacter(): string
    {
        return $this->character;
    }

    public function __toString(): string
    {
        return $this->character;
    }
}