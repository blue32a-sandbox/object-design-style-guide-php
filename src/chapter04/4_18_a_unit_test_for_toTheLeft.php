<?php
/**
 * 例４－１８　toTheLeft()のユニットテスト
 */

use PHPUnit\Framework\TestCase;

class PositionTest extends TestCase
{
    /**
     * @test
     */
    public function itCanMoveToTheLeft(): void
    {
        $position = new Position(10, 20);
        $position->toTheLeft(4);
        $this->assertEquals(new Position(6, 20), $position);
    }
}
