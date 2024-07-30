<?php
/**
 * 例６－１　Counterクラス
 */

final class Counter
{
    private int $count = 0;

    public function increment(): void
    {
        $this->count++;
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
        $counter = new Counter();
        $counter->increment();

        $this->assertEquals(1, $counter->currentCount());
    }
}
