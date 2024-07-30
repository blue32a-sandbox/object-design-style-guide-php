<?php
/**
 * 例６－２　increment()の代替実装
 */

final class Counter
{
    // ...

    public function increment(int $count): int
    {
        $this->count++;

        return $this->count;
    }
}
