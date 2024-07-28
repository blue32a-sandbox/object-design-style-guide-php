<?php
/**
 * 例４－３１　状態を変化させたときにPlayerはイベントを記録する
 */

final class Player
{
    private Position $position;
    private array $events = [];

    public function __construct(Position $initialPosition)
    {
        $this->position = $initialPosition;
    }

    public function moveLeft(int $steps): void
    {
        $nextPosition = $this->position->toTheLeft($steps);

        $this->position = $nextPosition;

        $this->events[] = new PlayerMoved($nextPosition);
    }

    public function recordedEvents(): array
    {
        return $this->events;
    }
}

use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase
{
    /**
     * @test
     */
    public function 記録されたイベントのリストを検証する(): void
    {
        $player = new Player(new Position(10, 20));

        $player->moveLeft(4);

        $this->assertEquals(
            [
                new PlayerMoved(new Position(6, 20))
            ],
            $player->recordedEvents()
        );
    }
}
