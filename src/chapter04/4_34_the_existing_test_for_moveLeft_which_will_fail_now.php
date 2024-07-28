<?php
/**
 * 例４－３４　既存のmoveLeft()のテストが失敗するようになる
 */

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
