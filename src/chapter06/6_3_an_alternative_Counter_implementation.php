<?php
/**
 * 例６－３　別のCounterの実装
 */

final class Counter
{
    private int $count = 0;

    public function incremented(): Counter
    {
        $copy = clone $this;

        $copy->count++;

        return $copy;
    }

    public function currentCount(): int
    {
        return $this->count;
    }
}

use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    /**
     * @test
     */
    public function testIncrement(): void
    {
        $this->assertEquals(
            1,
            (new Counter())->incremented()->currentCount()
        );
        $this->assertEquals(
            2,
            (new Counter())->incremented()->incremented()->currentCount()
        );
    }
}
