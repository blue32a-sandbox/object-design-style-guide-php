<?php
/**
 * 例６－１８　ExchangeRatesStubは常に同じ値を返す
 */

final class ExchangeRatesStub
{
    public function exchangeRateFor(
        Currency $from,
        Currency $to
    ): ExchangeRate {
        return ExchangeRate::from($from, $to, 1.2);
    }
}
