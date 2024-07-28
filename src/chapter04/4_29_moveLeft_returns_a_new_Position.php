<?php
/**
 * 例４－２９　moveLeft()が新しい位置を返す
 */

final class Player
{
    public function moveLeft(int $steps): Position
    {
        $this->position = $this->position->toTheLeft($steps);

        return $this->position;
    }
}

use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase
{
    /**
     * @test
     */
    public function itCanMoveLeft(): void
    {
        $player = new Player(new Position(10, 20));
        $currentPosition = $player->moveLeft(4);

        $this->assertEquals(new Position(6, 20), $currentPosition);
    }
}
