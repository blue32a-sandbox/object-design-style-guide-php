<?php
/**
 * 例６－１７　ExchangeRatesFakeを使ったCurrencyConverterのテスト
 */

final class ExchangeRatesFake implements ExchangeRates
{
    private array $rates = [];

    public function __construct(
        Currency $from,
        Currency $to,
        float $rate
    ) {
        $this->rates[$from->__toString()][$to->__toString()] =
            ExchangeRate::from($from, $to, $rate);
    }

    public function exchangeRateFor(
        Currency $from,
        Currency $to
    ): ExchangeRate {
        if (!isset($this->rates[$from->__toString()][$to->__toString()])) {
            throw new RuntimeException(
                'Cloud not determine exchange rate from [...] to [...]'
            );
        }

        return $this->rates[$from->__toString()][$to->__toString()];
    }
}

use PHPUnit\Framework\TestCase;

class CurrencyConverterTest extends TestCase
{
    /**
     * @test
     */
    public function it_converts_an_amount_using_the_exchange_rate(): void
    {
        $exchangeRates = new ExchangeRatesFake(
            new Currency('USD'),
            new Currency('EUR'),
            0.8
        );

        $currencyConverter = new CurrencyConverter($exchangeRates);

        $converted = $currencyConverter
            ->convert(new Money(1000, new Currency('USD')), new Currency('EUR'));

        $this->assertEquals(new Money(800, new Currency('EUR')), $converted);
    }
}
