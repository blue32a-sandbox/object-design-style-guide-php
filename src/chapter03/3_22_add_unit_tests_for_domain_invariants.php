<?php
/**
 * 例３－２２　ドメイン不変条件に対するユニットテストを追加する
 */

require_once __DIR__ . '/../../vendor/autoload.php';

use Assert\AssertionFailedException;
use PHPUnit\Framework\TestCase;

class CoordinatesTest extends TestCase
{
    /**
     * @test
     */
    public function 緯度はマイナス90度より小さい値は取れない(): void
    {
        $this->expectException(
            AssertionFailedException::class,
            'latitude'
        );
        new Coordinates(-90.1, 0.0);
    }
}
