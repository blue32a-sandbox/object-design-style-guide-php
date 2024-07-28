<?php
/**
 * 例４－３３　PlayerはPlayerTookInitialPositionイベントも記録する
 */

final class PlayerTookInitialPosition
{
    // ...
}

final class Player
{
    private $events;

    public function __construct(Position $initialPosition)
    {
        $this->position = $initialPosition;

        $this->events[] = new PlayerTookInitialPosition(
            $initialPosition
        );
    }
}
