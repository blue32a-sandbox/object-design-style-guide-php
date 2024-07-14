<?php
/**
 * 例１－３３　失敗をテストするためのユーティリティ関数
 */

use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    /**
     * @test
     */
    public function youCannotStartWithNegativeNumber(): void
    {
        $this->expectExceptionMessage(
            InvalidArgumentException::class,
            'negative'
        );
        new Foo(-10);
    }

    // ...
}
