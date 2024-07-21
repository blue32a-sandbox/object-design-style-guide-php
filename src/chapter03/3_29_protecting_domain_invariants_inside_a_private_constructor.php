<?php
/**
 * 例３－２９　プライベートコンストラクタによるドメイン不変条件の保護
 */

require_once __DIR__ . '/../../vendor/autoload.php';

use Assert\Assertion;

final class DecimalValue
{
    private int $value;
    private int $scale;

    private function __construct(int $value, int $scale)
    {
        $this->value = $value;

        Assertion::greaterOrEqualThan($scale, 0);
        $this->scale = $scale;
    }

    public static function fromInt(
        int $value,
        int $scale
    ): DecimalValue {
        return new DecimalValue($value, $scale);
    }

    public static function fromFloat(
        float $value,
        int $scale
    ): DecimalValue {
        return new DecimalValue(
            (int) round($value * pow(10, $scale)),
            $scale
        );
    }

    public static function fromString(string $value): DecimalValue
    {
        $result = preg_match('/^(\d+)\.(\d+)/', $value, $matches);
        if ($result === 0) {
            throw new InvalidArgumentException(/* ... */);
        }

        $wholeNumber = $matches[1];
        $decimals = $matches[2];

        $valueWithoutDecimalSign = $wholeNumber . $decimals;

        return new DecimalValue(
            (int) $valueWithoutDecimalSign,
            strlen($decimals)
        );
    }
}
