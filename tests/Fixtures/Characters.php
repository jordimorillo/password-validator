<?php


namespace Tests\Fixtures;


use Src\Character\Character;
use Src\Character\Letter;
use Src\Character\Symbol;

class Characters
{
    public static function aLetter(): Character
    {
        return new Letter('a');
    }

    public static function aNonValidCharacter(): Character
    {
        return new Symbol('·');
    }
}