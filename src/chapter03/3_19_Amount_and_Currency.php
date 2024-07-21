<?php
/**
 * 例３－１９　AmountとCurrency
 */

final class Amount
{
    // ...
}

final class Currency
{
    // ...
}

final class Product
{
    public function setPrice(
        Amount $amount,
        Currency $currency
    ): void {
        // ...
    }
}

final class Converter
{
    public function convert(
        Amount $amount,
        Currency $localCurrency,
        Currency $targetCurrency
    ): Amount {
        // ...
    }
}
