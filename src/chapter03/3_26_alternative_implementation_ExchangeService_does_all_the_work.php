<?php
/**
 * 例３－２６　代替の実装：ExchangeServiceがすべての作業を行う
 */

final class ExchangeService
{
    private ExchangeRateProvider $exchangeRateProvider;

    public function __construct(
        ExchangeRateProvider $exchangeRateProvider
    ) {
        $this->exchangeRateProvider = $exchangeRateProvider;
    }

    public function convert(
        Money $money,
        Currency $targetCurrency
    ): Money {
        $exchagneRate = $this->exchangeRateProvider
            ->getRateFor($money->currency(), $targetCurrency);

        return new Money(
            $exchagneRate->rate()->applyTo($money->amount()),
            $targetCurrency
        );
    }
}
