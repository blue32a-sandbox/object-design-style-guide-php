<?php
/**
 * 例３－１５　Coordinatesのドメイン不変条件に関するテスト
 */

use PHPUnit\Framework\TestCase;

class CoordinatesTest extends TestCase
{
    /**
     * @test
     */
    public function 緯度は90度より大きい値は取れない(): void
    {
        $this->expectException(
            InvalidArgumentException::class
        );
        new Coordinates(90.1, 0.0);
    }

    /**
     * @test
     */
    public function 緯度はマイナス90度より小さい値は取れない(): void
    {
        $this->expectException(
            InvalidArgumentException::class
        );
        new Coordinates(-90.1, 0.0);
    }

    /**
     * @test
     */
    public function 経度は180度より大きい値は取れない(): void
    {
        $this->expectException(
            InvalidArgumentException::class
        );
        new Coordinates(-90.1, 180.1);
    }
}
