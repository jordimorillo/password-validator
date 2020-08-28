<?php


namespace Src\Character;


class CharacterValidator
{
    private array $list;

    /**
     * CharacterValidator constructor.
     * @param array $list
     */
    public function __construct(array $list)
    {
        $this->list = $list;
    }

    public function handle(Character $aCharacter): bool
    {
        if(in_array((string)$aCharacter, $this->list, true)) {
            return true;
        }

        return false;
    }
}