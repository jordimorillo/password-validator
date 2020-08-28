<?php


namespace Src\Character;


use Src\StringValueObject\StringValueObject;

abstract class Character implements StringValueObject
{
    protected string $character;

    public function __construct(string $character)
    {
        $this->character = $character;
    }

    abstract public function getCharacter(): Character;

    public function __toString(): string
    {
        return $this->character;
    }
}