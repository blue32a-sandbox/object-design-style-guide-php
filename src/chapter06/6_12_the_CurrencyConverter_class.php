<?php
/**
 * 例６－１２　CurrencyConverterクラス
 */

final class CurrencyConverter
{
    public function convert(Money $money, Currency $to): Money
    {
        $httpClient = new CurlHttpClient();
        $response = $httpClient->get(
            'https://data.fixer.io/api/latest?access_key=...' .
                '&base=' . $money->currency()->__toString() .
                '&symbols=' . $to->__toString()
        );
        $decoded = json_decode($response->getBody());
        $rate = (float) $decoded->rates[$to->__toString()];

        return $money->convert($to, $rate);
    }
}
