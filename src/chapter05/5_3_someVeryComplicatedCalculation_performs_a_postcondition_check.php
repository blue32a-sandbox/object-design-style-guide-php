<?php
/**
 * 例５－３　someVeryComplicatedCalculation()で事後条件をチェックする
 */

use Assert\Assertion;

final class Foo
{
    public function someVeryComplicatedCalculation(): int
    {
        // ...
        $result = /* ... */;
        Assertion::greaterThan(0, $result);

        return $result;
    }
}
