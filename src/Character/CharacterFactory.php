<?php


namespace Src\Character;


class CharacterFactory
{
    /**
     * @param string $character
     * @return Character
     * @throws CharacterNotFound
     */
    public function getCharacter(string $character): Character
    {
        if($character === '') {
            throw new CharacterNotFound('Character not found');
        }

        if(in_array($character, ['a', 'b', 'c','d', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'ñ', 'o', 'p', 'q', 'r', 's', 't',
            'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
            'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'])) {
            return new Letter($character);
        }

        if(in_array($character, ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'])) {
            return new Number($character);
        }

        return new Symbol($character);
    }
}