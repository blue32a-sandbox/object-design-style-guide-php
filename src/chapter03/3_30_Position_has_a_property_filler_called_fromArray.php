<?php
/**
 * 例３－３０　PositionはfromArray()というプロパティフィラーを持つ
 */

final class Position
{
    private int $x;
    private int $y;

    public static function fromArray(array $data): Position
    {
        $position = new Position();
        $position->x = $data['x'];
        $position->y = $data['y'];
        return $position;
    }
}
