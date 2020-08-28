<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Src\Password\Password;
use Src\Password\PasswordNotValid;
use Tests\Fixtures\Passwords;

class PasswordTest extends TestCase
{
    /**
     * @throws PasswordNotValid
     */
    public function testCanInstantiateAPassword(): void
    {
        $aPassword = Passwords::aPassword();
        self::assertInstanceOf(Password::class, $aPassword);
    }

    public function testWillThrowExceptionWhenThePasswordUsesNotValidCharacters(): void
    {
        $this->expectException(PasswordNotValid::class);
        Passwords::aNonValidPassword();
    }
}
