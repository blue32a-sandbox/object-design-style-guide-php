<?php
/**
 * 例３－１　一貫した振る舞いに最低限必要なデータを要求する
 */

final class Position
{
    private int $x;
    private int $y;

    public function __construct()
    {
    }

    public function setX(int $x): void
    {
        $this->x = $x;
    }

    public function setY(int $y): void
    {
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

$position = new Position();
$position->setX(45);
$position->setY(60);
