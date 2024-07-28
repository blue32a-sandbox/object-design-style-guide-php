<?php
/**
 * 例４－１３　withX()よりも便利なtoTheLeft()
 */

final class Position
{
    // ...

    public function toTheLeft(int $x): Position
    {
        $copy = clone $this;

        $copy->x = $this->x - $x;

        return $copy;
    }
}


use PHPUnit\Framework\TestCase;

class PositionTest extends TestCase
{
    /**
     * @test
     */
    public function ４歩左に移動する(): void
    {
        $position = new Position(10, 20);

        $nextPosition = $position->toTheLeft(4);

        $this->assertEquals(new Position(6, 20), $nextPosition);
    }

    /**
     * @test
     */
    public function 元のオブジェクトは変更されていない(): void
    {
        $position = new Position(10, 20);

        $position->toTheLeft(4);

        $this->assertEquals(new Position(10, 20), $position);
    }
}
