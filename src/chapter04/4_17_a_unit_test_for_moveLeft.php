<?php
/**
 * 例４－１７　moveLeft()のユニットテスト
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
        $position->moveLeft(4);
        $this->assertSame(6, $position->x());
    }
}
