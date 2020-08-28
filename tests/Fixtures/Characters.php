<?php


namespace Tests\Fixtures;


use Src\Character\Character;

class Characters
{
    public static function aCharacter(): Character
    {
        return new Character('a');
    }

    public static function aNonValidCharacter(): Character
    {
        return new Character('·');
    }
}