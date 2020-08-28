<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Src\Character\Character;
use Tests\Fixtures\Characters;

class CharacterTest extends TestCase
{
    public function testCanInstantiateACharacter(): void
    {
        $aCharacter = Characters::aCharacter();
        self::assertInstanceOf(Character::class, $aCharacter);
    }
}
