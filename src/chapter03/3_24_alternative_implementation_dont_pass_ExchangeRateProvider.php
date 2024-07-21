<?php
/**
 * 例３－２４　代替の実装：ExchangeRateProviderを渡さない
 */

final class ExchangeRate
{
    public function __construct(
        Currency $from,
        Currency $to,
        Rate $rate
    ) {
        // ...
    }

    public function convert(Amount $amount): Monye
    {
        // ...
    }
}

$money = new Money(/* ... */);
$exchangeRate = $exchangeRateProvider->getRateFor(
    $money->currency(),
    $targetCurrency
);
$converted = $exchangeRate->convert($money->amount());
