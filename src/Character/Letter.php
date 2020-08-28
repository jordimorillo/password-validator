<?php


namespace Src\Character;


class Letter extends Character
{
    public function getCharacter(): Character
    {
        return new self($this->character);
    }
}