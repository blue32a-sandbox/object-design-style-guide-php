<?php
/**
 * 例４－２１　equals()は、２つのPositionオブジェクトを比較する際に役立つ
 */

final class Position
{
    // ...

    public function equals(Position $other): bool
    {
        return $this->x === $other->x && $this->y === $other->y;
    }
}
