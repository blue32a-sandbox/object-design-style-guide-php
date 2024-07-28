<?php
/**
 * 例４－２８　Playerオブジェクト全体と期待されるオブジェクトを比較できる
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

        $this->assertEquals(new Player(new Position(6, 20)), $player);
    }
}
