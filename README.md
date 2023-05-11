
# currencylib

Light weight library to convert currencies with offset

[![PHP Composer](https://github.com/BLVCKGVD/currencylib/actions/workflows/php.yml/badge.svg)](https://github.com/BLVCKGVD/currencylib/actions/workflows/php.yml)

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)

![PHP](https://badgen.net/badge/php/">=7.4"/blue)

![ext-simplexml](https://badgen.net/badge/ext-simplexml/"*"/green)

![Made By](https://badgen.net/badge/author/blvckgvd(Anton-Shulzhenko)/red)


## Installation

Install currencylib with composer

```bash
  composer require blvckgvd/currencylib
```
    
## Usage/Examples
### Just Convert
```php
use Blvckgvd\Currencylib\CurrencyLib;

public function convertPrice() {
  $price = CurrencyLib::convert('USD', 'EUR', 350, 2);
  return $price;
}
// Converted from US Dollars to Euros number
```
### Convert with currency symbol
```php
use Blvckgvd\Currencylib\CurrencyLib;

public function convertPriceWithSymbol() {
  $price = CurrencyLib::convertWithCurrencySymbol('USD', 'EUR', 350, 2);
  return $price;
}
// Converted from US Dollars to Euros number with symbol €
```
### Get Currency symbol
```php
use Blvckgvd\Currencylib\CurrencyLib;

public function getSymbol() {
  $symbol = CurrencyLib::getCurrencySymbol('JPY');
  return $symbol;
}
// Get symbol from currency code, at this situation you'll get ¥
```


## Supported currency codes

- AUD
- AZN
- GBP
- AMD
- BYN
- BGN
- BRL
- HUF
- VND
- HKD
- GEL
- DKK
- AED
- USD
- EUR
- EGP
- INR
- IDR
- KZT
- CAD
- QAR
- KGS
- CNY
- MDL
- NZD
- NOK
- PLN
- RON
- XDR
- SGD
- TJS
- THB
- TRY
- TMT
- UZS
- UAH
- CZK
- SEK
- CHF
- RUB
- RSD
- ZAR
- KRW
- JPY

