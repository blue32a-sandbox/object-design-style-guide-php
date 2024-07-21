<?php
/**
 * 例３－２　Positionはxとyのコンストラクタに引数を要求する
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

    public function distanceTo(Position $other): float
    {
        return sqrt(
            ($other->x - $this->x) ** 2 +
            ($other->y - $this->y) ** 2
        );
    }
}

$position = new Position(45, 60);
