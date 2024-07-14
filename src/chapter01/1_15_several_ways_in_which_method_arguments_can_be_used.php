<?php
/**
 * 例１－１５　メソッド引数の使い方
 */

class Foo
{
    private int $number;

    public function setNumber(int $newNumber): void
    {
        $this->number = $newNumber;
    }

    private function multiply(int $other): int
    {
        return $this->number * $other;
    }

    private function someOtherMethod(Bar $bar): void
    {
        $bar->doSomething();
    }
}
