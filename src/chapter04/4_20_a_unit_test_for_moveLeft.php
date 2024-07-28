<?php
/**
 * 例４－２０　moveLeft()のユニットテスト
 */

use PHPUnit\Framework\TestCase;

class PlyearTest extends TestCase
{
    /**
     * @test
     */
    public function thePlayerStartsAtAPositionAndCanMoveLeft(): void
    {
        $initialPosition = new Position(10, 20);
        $player = new Player($initialPosition);

        $this->assertSame($initialPosition, $player->currentPosition());

        $player->moveLeft(4);

        $this->assertEquals(new Position(6, 20), $player->currentPosition());
    }
}
