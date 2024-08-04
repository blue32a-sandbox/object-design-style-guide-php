<?php
/**
 * 例６－１９　FixerApiのテストは統合テストになる
 */

use PHPUnit\Framework\TestCase;

class FixerApiTest extends TestCase
{
    /**
     * @test
     */
    public function it_retrieves_the_current_exchange_rate(): void
    {
        $exchangeRates = new FixerApi(new CurlHttpClient());

        $exchangeRate = $exchangeRates->exchangeRateFor(
            new Currency('USD'),
            new Currency('EUR')
        );

        // ここで結果を検証
    }
}
