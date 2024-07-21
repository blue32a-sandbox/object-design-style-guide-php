<?php
/**
 * 例３－４　Coordinatesのドメイン不変条件の検証
 */

use PHPUnit\Framework\TestCase;

class CoordinatesTest extends TestCase
{
    /**
     * @test
     */
    public function testLatitudeDomainInvariants(): void
    {
        $this->expectException(
            InvalidArgumentException::class,
            'Latitude'
        );
        new Coordinates(90.1, 0.0);
    }

    /**
     * @test
     */
    public function testLongitudeDomainInvariants(): void
    {
        $this->expectException(
            InvalidArgumentException::class,
            'Longitude'
        );
        new Coordinates(0.0, 180.1);
    }
}
