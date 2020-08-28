<?php


namespace Tests\Fixtures;


use Src\Character\CharacterNotFound;
use Src\Character\CharacterValidator;
use Src\Password\Password;
use Src\Password\PasswordNotValid;

class Passwords
{
    /**
     * @return Password
     * @throws PasswordNotValid|CharacterNotFound
     */
    public static function aPassword(): Password
    {
        return new Password(
            '4V4l1dP4$$w0Rd',
            new CharacterValidator(ValidCharacters::list())
        );
    }

    /**
     * @return Password
     * @throws PasswordNotValid|CharacterNotFound
     */
    public static function aNonValidPassword(): Password
    {
        return new Password(
            'A non valid password',
            new CharacterValidator(ValidCharacters::list())
        );
    }
}