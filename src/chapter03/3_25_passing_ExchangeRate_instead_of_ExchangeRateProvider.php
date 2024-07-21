<?php
/**
 * 例３－２５　ExchangeRateProviderの代わりにExchangeRateを渡す
 */

require_once __DIR__ . '/../../vendor/autoload.php';

use Assert\Assertion;

final class Money
{
    public function convert(ExchangeRate $exchangeRate): Money
    {
        Assertion::eq(
            $this->currency,
            $exchangeRate->fromCurrency()
        );

        return new Money(
            $exchangeRate->rate()->applyTo($this->amount),
            $exchangeRate->targetCurrency()
        );
    }
}
