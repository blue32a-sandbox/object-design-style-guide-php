<?php
/**
 * 例６－１６　ExchangeRates抽象サービスの導入する
 */

/**
 * [質問]のためのメソッドを抽出し、`ExchangeRates`抽象サービスのパブリックメソッドとする：
 */
interface ExchangeRates
{
    public function exchangeRateFor(
        Currency $from,
        Currency $to
    ): ExchangeRate;
}

final class FixerApi implements ExchangeRates
{
    private HttpClient $httpClient;

    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function exchangeRateFor(
        Currency $from,
        Currency $to
    ): ExchangeRate {
        $response = $this->httpClient->get(/* ... */);
        $decoded = json_decode($response->getBody());
        $rate = (float) $decoded->rates[$to->__toString()];

        return ExchangeRate::from($from, $to, $rate);
    }
}

final class CurrencyConverter
{
    private ExchangeRates $exchangeRates;

    public function __construct(ExchangeRates $exchangeRates)
    {
        $this->exchangeRates = $exchangeRates;
    }

    // ...

    private function exchangeRateFor(
        Currency $from,
        Currency $to
    ): ExchangeRate {
        return $this->exchangeRates->exchangeRateFor($from, $to);
    }
}
