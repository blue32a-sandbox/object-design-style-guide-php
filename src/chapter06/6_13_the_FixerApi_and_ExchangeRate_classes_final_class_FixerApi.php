<?php
/**
 * 例６－１３　FixerApiとExchangeRateクラス
 */

final class FixerApi
{
    public function exchangeRateFor(
        Currency $from,
        Currency $to
    ): ExchangeRate {
        $httpClient = new CurlHttpClient();
        $response = $httpClient->get(/* ... */);
        $decoded = json_decode($response->getBody());
        $rate = (float) $decoded->rates[$to->__toString()];

        return ExchangeRate::from($from, $to, $rate);
    }
}

final class ExchangeRate
{
    public static function from(
        Currency $from,
        Currency $to,
        float $rate
    ): ExchangeRate {
        // ...
    }
}

final class CurrencyConverter
{
    private FixerApi $fixerApi;

    public function __construct(FixerApi $fixerApi)
    {
        $this->fixerApi = $fixerApi;
    }

    public function convert(Money $money, Currency $to): Money
    {
        $exchangeRate = $this->fixerApi
            ->exchangeRateFor(
                $money->currency(),
                $to
            );

        return $money->convert($exchangeRate);
    }
}
