<?php


namespace Src\Password;


use Src\Character\CharacterFactory;
use Src\Character\CharacterNotFound;
use Src\Character\CharacterValidator;
use Src\StringValueObject\StringValueObject;

class Password implements StringValueObject
{
    private string $password;

    /**
     * Password constructor.
     * @param string $password
     * @param array|null $validCharactersList
     * @throws CharacterNotFound
     * @throws PasswordNotValid
     */
    public function __construct(
        string $password,
        array $validCharactersList = null
    ) {
        $this->checkNonValidCharacters(
            $password,
            new CharacterValidator($validCharactersList)
        );
        $this->password = $password;
    }

    /**
     * @param string $password
     * @param CharacterValidator $characterValidator
     * @throws PasswordNotValid
     * @throws CharacterNotFound
     */
    public function checkNonValidCharacters(string $password, CharacterValidator $characterValidator): void
    {
        $characters = str_split($password);
        $characterFactory = new CharacterFactory();
        foreach ($characters as $character) {
            $isValid = $characterValidator->handle($characterFactory->getCharacter($character));
            if ($isValid === false) {
                throw new PasswordNotValid('The issued password is not valid');
            }
        }
    }

    public function __toString(): string
    {
        return $this->password;
    }
}