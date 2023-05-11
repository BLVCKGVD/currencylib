
# currencylib

Light weight library to convert currencies



[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)

![PHP](https://badgen.net/badge/php/>=5.6/blue)

![ext-simplexml](https://badgen.net/badge/ext-simplexml/*/green)


## Installation

Install currencylib with composer

```bash
  composer require blvckgvd/currencylib
```
    
## Usage/Examples

```php
use Blvckgvd\Currencylib\CurrencyLib;

public function convertPrice($value) {
  $price = CurrencyLib::convert('USD', 'EUR', 350);
  return $price;
}
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
- RSD
- ZAR
- KRW
- JPY

