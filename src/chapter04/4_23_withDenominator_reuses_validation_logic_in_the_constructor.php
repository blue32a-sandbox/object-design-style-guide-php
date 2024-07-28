<?php

use Assert\Assertion;

/**
 * 例４－２３　withDenominator()はコンストラクタの検証ロジックを再利用する
 */

final class Fraction
{
    private int $numerator;
    private int $denominator;

    public function __construct(int $numerator, int $denominator)
    {
        Assertion::notEq(
            $denominator,
            0,
            'The denominator of a fraction cannot be 0'
        );

        $this->numerator = $numerator;
        $this->denominator = $denominator;
    }

    public function withDenominator($newDenominator): Fraction
    {
        return new Fraction($this->numerator, $newDenominator);
    }
}

use PHPUnit\Framework\TestCase;

class FractionTest extends TestCase
{
    public function testHOge(): void
    {
        $fraction = new Fraction(1, 2);

        $this->expectException(
            InvalidArgumentException::class,
            'denominator'
        );

        $fraction->withDenominator(0);
    }
}
