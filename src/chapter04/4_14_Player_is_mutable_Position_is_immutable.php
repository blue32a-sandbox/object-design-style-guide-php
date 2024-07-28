<?php
/**
 * 例４－１４　Playerはミュータブル、Positionはイミュータブル
 */

final class Player
{
    private Position $position;

    public function __construct(Position $position)
    {
        $this->position = $position;
    }

    public function moveLeft(int $steps): void
    {
        $this->position = $this->position->toTheLeft($steps);
    }

    public function currentPosition(): Position
    {
        return $this->position;
    }
}
