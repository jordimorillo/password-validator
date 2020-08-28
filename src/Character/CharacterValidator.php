<?php


namespace Src\Character;


class CharacterValidator
{
    private array $validCharactersList;

    /**
     * CharacterValidator constructor.
     * @param array $validCharactersList
     */
    public function __construct(array $validCharactersList)
    {
        $this->validCharactersList = $validCharactersList;
    }

    public function handle(Character $aCharacter): bool
    {
        if(in_array((string)$aCharacter, $this->validCharactersList, true)) {
            return true;
        }

        return false;
    }
}