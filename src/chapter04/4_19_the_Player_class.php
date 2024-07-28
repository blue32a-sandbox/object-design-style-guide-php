<?php
/**
 * 例４－１９　Playerクラス
 */

final class Player
{
    private Position $position;

    public function __construct(Position $initialPosition)
    {
        $this->position = $initialPosition;
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
