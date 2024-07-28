<?php
/**
 * 例４－３０　テストに合格する壊れた実装
 */

final class Player
{
    public function moveLeft(int $steps): Position
    {
        return $this->position->toTheLeft($steps);
    }
}
