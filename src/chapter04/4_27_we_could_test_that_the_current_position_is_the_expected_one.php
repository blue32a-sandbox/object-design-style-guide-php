<?php
/**
 * 例４－２７　現在位置が期待したものであるかどうかをテスト
 */

use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase
{
    /**
     * @test
     */
    public function itCanMoveLeft(): void
    {
        $player = new Player(new Position(10, 20));
        $player->moveLeft(4);

        $this->assertEquals(new Position(6, 20), $player->currentPosition());
    }
}
