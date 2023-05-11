<?php

use Blvckgvd\Currencylib\CurrencyLib;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test_convert() {
        self::assertEquals(1, CurrencyLib::convert('RUB', 'RUB', 1));
        self::assertEquals('1 ₽', CurrencyLib::convertWithCurrencySymbol('RUB', 'RUB', 1));
        self::assertNotNull(CurrencyLib::convert('RUB', 'USD', 1));
        self::assertNotNull(CurrencyLib::convert('USD', 'RUB', 1));
        self::assertNull(CurrencyLib::convert('RUB', 'USSdasdasD', 1));
        self::assertNull(CurrencyLib::convertWithCurrencySymbol('RUB', 'USSdasdasD', 1));
    }
}
