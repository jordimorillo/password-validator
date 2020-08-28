<?php


namespace Src\Character;


class CharacterValidator
{
    private array $validCharactersList;

    /**
     * CharacterValidator constructor.
     * @param array $validCharactersList
     */
    public function __construct(array $validCharactersList = null)
    {
        if($validCharactersList === null) {
            $this->validCharactersList = [
                'a', 'b', 'c','d', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'ñ', 'o', 'p', 'q', 'r', 's', 't',
                'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
                'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9',
                '@', '%', '+', '\\', '/', '\'', '!', '#', '$', '^', '?', ':', '.', '(', ')', '{', '}', '[', ']', '~', '`',
                '-', '_', '.'
            ];
        } else {
            $this->validCharactersList = $validCharactersList;
        }
    }

    public function handle(Character $aCharacter): bool
    {
        if(in_array((string)$aCharacter, $this->validCharactersList, true)) {
            return true;
        }

        return false;
    }
}