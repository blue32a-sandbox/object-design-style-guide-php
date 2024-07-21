<?php
/**
 * 例３－１６　例外メッセージに特定の文字列が含まれているかを検証する
 */

use PHPUnit\Framework\TestCase;

class CoordinatesTest extends TestCase
{
    /**
     * @test
     */
    public function 経度は180度より大きい値は取れない(): void
    {
        $this->expectException(
            InvalidArgumentException::class,
            'Longitude' // この単語が例外メッセージの中にあるはず
        );
        new Coordinates(-90.1, 180.1);
    }
}
