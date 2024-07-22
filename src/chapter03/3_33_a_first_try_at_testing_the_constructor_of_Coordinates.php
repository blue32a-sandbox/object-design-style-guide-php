<?php
/**
 * 例３－３３　Coordinatesのコンストラクタをテストするための最初の試み
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

        $this->assertInstanceOf(Coordinates::class, $coordinates);
    }
}
