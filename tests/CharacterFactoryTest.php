<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Src\Character\CharacterNotFound;
use Src\Character\CharacterFactory;
use Src\Character\Letter;
use Src\Character\Number;
use Src\Character\Symbol;

class CharacterFactoryTest extends TestCase
{
    /**
     * @throws CharacterNotFound
     */
    public function testWillReturnALetter(): void
    {
        $characterFactory = new CharacterFactory();
        $obtainedLetter = $characterFactory->getCharacter('a');
        self::assertInstanceOf(Letter::class, $obtainedLetter);
    }

    /**
     * @throws CharacterNotFound
     */
    public function testWillReturnANumber(): void
    {
        $characterFactory = new CharacterFactory();
        $obtainedNumber = $characterFactory->getCharacter('1');
        self::assertInstanceOf(Number::class, $obtainedNumber);
    }

    /**
     * @throws CharacterNotFound
     */
    public function testWillReturnASymbol(): void
    {
        $characterFactory = new CharacterFactory();
        $obtainedSymbol = $characterFactory->getCharacter('%');
        self::assertInstanceOf(Symbol::class, $obtainedSymbol);
    }

    public function testWillThrowExceptionWhenAnEmptyCharacterIsSent(): void
    {
        $characterFactory = new CharacterFactory();
        self::expectException(CharacterNotFound::class);
        $characterFactory->getCharacter('');
    }
}
