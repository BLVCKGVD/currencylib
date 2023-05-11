<?php

namespace Blvckgvd\Currencylib;


class CurrencyLib
{
    const host = 'https://www.cbr.ru/scripts/XML_daily.asp';

    public static function convert($from, $to, $value)
    {
        $xml = simplexml_load_string(file_get_contents(self::host));
        if ($from == 'RUB') {
            foreach ($xml as $item) {
                if ($item->CharCode == $to) {
                    return $value / $item->Value;
                }
            }
        }
        if ($from != 'RUB') {
            $fromCurrency = 0;
            $toCurrency = 0;
            foreach ($xml as $item) {
                if ($item->CharCode == $from) {
                    $fromCurrency =  $item->Value;
                }
                if ($item->CharCode == $to) {
                    $toCurrency =  $item->Value;
                }
            }
            $multiply = $fromCurrency/$toCurrency;
            return $value * $multiply;
        }
        return null;
    }
}
