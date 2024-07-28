<?php
/**
 * 例４－３６　moveLeft()はイベントを記録するだけだがテストは依然として成功する
 */

final class Player
{
    // ...

    public function moveLeft(int $steps): void
    {
        $nextPosition = $this->position->toTheLeft($steps);

        $this->events[] = new PlayerMoved($nextPosition);
    }

    // ...
}
