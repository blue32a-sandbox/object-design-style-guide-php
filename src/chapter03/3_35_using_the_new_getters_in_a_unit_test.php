<?php
/**
 * 例３－３５　新しいゲッタをユニットテストで使用する
 */

use PHPUnit\Framework\TestCase;

class CoordinatesTest extends TestCase
{
    /**
     * @test
     */
    public function itCanBeConstructed(): void
    {
        $coordinates = new Coordinates(60.0, 100.0);

        $this->assertEquals(60.0, $coordinates->latitude());
        $this->assertEquals(100.0, $coordinates->longitude());
    }
}
