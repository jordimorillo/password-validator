<?php


namespace Src\Character;


class Number extends Character
{
    public function getCharacter(): Character
    {
        return new self($this->character);
    }
}