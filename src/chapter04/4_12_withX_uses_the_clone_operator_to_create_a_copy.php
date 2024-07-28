<?php
/**
 * 例４－１２　withX()はclone演算子を使用してコピーを作成する
 */

final class Position
{
    private int $x;
    private int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function withX(int $x): Position
    {
        $copy = clone $this;

        $copy->x = $x;

        return $copy;
    }
}

use PHPUnit\Framework\TestCase;

class PositionTest extends TestCase
{
    /**
     * @test
     */
    public function withXはオブジェクトのコピーを作成する(): void
    {
        $position = new Position(10, 20);

        $nextPosition = $position->withX(6);

        $this->assertEquals(new Position(6, 20), $nextPosition);
    }
}
