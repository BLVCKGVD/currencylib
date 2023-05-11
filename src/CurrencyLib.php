<?php

namespace Blvckgvd\Currencylib;


class CurrencyLib
{
    const host = 'https://www.cbr.ru/scripts/XML_daily.asp';

    public static function convert($from, $to, $value, $offset = 10)
    {
        $xml = simplexml_load_string(file_get_contents(self::host));
        if ($from == 'RUB') {
            if ($to == 'RUB') { return $value; }
            foreach ($xml as $item) {
                if ($item->CharCode == $to) {
                    return number_format($value / $item->Value, $offset, '.', '');
                }
            }
        }
        if ($from != 'RUB') {
            $fromCurrency = 0;
            $toCurrency = 0;
            if ($to == 'RUB') { $toCurrency = 1; }
            foreach ($xml as $item) {
                if ($item->CharCode == $from) {
                    $fromCurrency =  $item->Value;
                }
                if ($item->CharCode == $to) {
                    $toCurrency =  $item->Value;
                }
            }
            $multiply = $fromCurrency/$toCurrency;
            return number_format($value * $multiply, $offset, '.', '');
        }
        return null;
    }

    public static function convertWithCurrencySymbol($from, $to, $value, $offset = 10) {
        return self::convert($from,$to,$value,2) . " " . self::getCurrencySymbol($to);
    }

    public static function getCurrencySymbol($currency) {
        $symbolMap = self::symbolsMap();
        if (array_key_exists($currency, $symbolMap)) {
            return $symbolMap[$currency];
        }
        return null;
    }

    private static function symbolsMap() {
        return [
            'AUD' => 'AU$',
            'AZN' => '₼',
            'GBP' => '£',
            'AMD' => '֏',
            'BYN' => 'BYN',
            'BGN' => 'лв',
            'BRL' => 'R$',
            'HUF' => 'Ft',
            'VND' => 'đ',
            'HKD' => 'HK$',
            'GEL' => '₾',
            'DKK' => 'kr',
            'AED' => 'د.إ',
            'USD' => '$',
            'EUR' => '€',
            'EGP' => 'E£',
            'INR' => '₹',
            'IDR' => 'Rp',
            'KZT' => '₸',
            'CAD' => '$',
            'QAR' => 'QR',
            'KGS' => 'с',
            'CNY' => '¥',
            'MDL' => 'L',
            'NZD' => 'NZ$',
            'NOK' => 'kr',
            'PLN' => 'zł',
            'RON' => 'L',
            'XDR' => 'XDR',
            'SGD' => 'S$',
            'TJS' => 'SM',
            'THB' => '฿',
            'TRY' => '₺',
            'TMT' => 't',
            'UZS' => 'лв',
            'UAH' => '₴',
            'CZK' => 'Kč',
            'SEK' => 'kr',
            'CHF' => '₣',
            'RUB' => '₽',
            'RSD' => 'РСД',
            'ZAR' => 'R',
            'KRW' => '₩',
            'JPY' => '¥',
        ];
    }
}
