<?php
/**
 * 例３－２３　MoneyはExchangeRateProviderサービスを必要とする
 */

final class Money
{
    private Amount $amount;
    private Currency $currency;

    public function __construct(Amount $amount, Currency $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function convert(
        ExchangeRateProvider $exchangeRateProvider,
        Currency $targetCurrency
    ): Money {
        $exchagneRate = $exchangeRateProvider->getRateFor(
            $this->currency,
            $targetCurrency
        );

        return $exchagneRate->convert($this->amount);
    }
}
