<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Src\Character\CharacterValidator;
use Tests\Fixtures\Characters;
use Tests\Fixtures\ValidCharacters;

class CharacterValidatorTest extends TestCase
{
    public function testWillReturnTrueWhenACharacterIsValid(): void
    {
        $aCharacter = Characters::aLetter();
        $characterValidator = new CharacterValidator(
            ValidCharacters::list()
        );
        $isValid = $characterValidator->handle($aCharacter);
        self::assertTrue($isValid);
    }

    public function testWillReturnFalseWhenACharacterIsNotValid(): void
    {
        $aNonValidCharacter = Characters::aNonValidCharacter();
        $characterValidator = new CharacterValidator(
            ValidCharacters::list()
        );
        $isValid = $characterValidator->handle($aNonValidCharacter);
        self::assertFalse($isValid);
    }
}
