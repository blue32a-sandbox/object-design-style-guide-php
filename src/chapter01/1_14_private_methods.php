<?php
/**
 * 例１－１４　privateメソッド
 */

class Foo
{
    public function someMethod(): int
    {
        $value = $this->stepOne();

        return $this->stepTwo($value);
    }

    private function stepOne(): int
    {
        return 1;
    }

    private function stepTwo(int $value): int
    {
        return $value + 1;
    }
}
