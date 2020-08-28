<?php


namespace Src\Character;


class Symbol extends Character
{
    public function getCharacter(): Character
    {
        return new self($this->character);
    }
}