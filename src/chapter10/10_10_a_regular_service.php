<?php
/**
 * 例１０－１０　通常のサービス
 */

namespace Application\ExchangeRates;

interface ExchangeRateProvider
{
    public function getRateFor(
        Currency $from,
        Currency $to
    ): ExchangeRate;
}

final class ExchangeRate
{
    // ...
}
