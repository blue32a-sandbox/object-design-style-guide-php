<?php
/**
 * 例６－１５　HttpClientインターフェースを追加しFixerApiで使用する
 */

interface HttpClient
{
    public function get($url): Response;
}

final class CurlHttpClient implements HttpClient
{
    // ...
}

final class FixerApi
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
