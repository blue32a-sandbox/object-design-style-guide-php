<?php
/**
 * 例６－１４　CurlHttpClientのインスタンスを使用してAPIに接続する
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
