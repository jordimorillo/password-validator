<?php


namespace Src\Password;


use Src\Character\Character;
use Src\Character\CharacterValidator;
use Src\StringValueObject\StringValueObject;

class Password implements StringValueObject
{
    private string $password;

    /**
     * Password constructor.
     * @param string $password
     * @param CharacterValidator $characterValidator
     * @throws PasswordNotValid
     */
    public function __construct(
        string $password,
        CharacterValidator $characterValidator
    ) {
        $this->checkNonValidCharacters($password, $characterValidator);
        $this->password = $password;
    }

    /**
     * @param string $password
     * @param CharacterValidator $characterValidator
     * @throws PasswordNotValid
     */
    public function checkNonValidCharacters(string $password, CharacterValidator $characterValidator): void
    {
        $characters = str_split($password);
        foreach ($characters as $character) {
            $isValid = $characterValidator->handle(new Character($character));
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