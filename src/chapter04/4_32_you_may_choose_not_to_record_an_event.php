<?php
/**
 * 例４－３２　イベントを記録しないこともできる
 */

final class Player
{
    // ...

    public function moveLeft(int $steps): void
    {
        if ($steps === 0) {
            return;
        }

        $nextPosition = $this->position->toTheLeft($steps);

        $this->position = $nextPosition;

        $this->events[] = new PlayerMoved($nextPosition);
    }

    // ...
}
