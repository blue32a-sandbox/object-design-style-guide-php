<?php
/**
 * 例１－３２　失敗のテスト
 */

final class Foo
{
    private int $someNumber;

    public function __construct(int $startWith)
    {
        if ($startWith < 0) {
            throw new InvalidArgumentException(
                'A negative starting number is not allowed'
            );
        }
        $this->someNumber = $startWith;
    }

    // ...
}

use PHPUnit\Framework\TestCase;

final class FooTest extends TestCase
{
    public function youCannotStartWithNegativeNumber(): void
    {
        try {
            new Foo(-10);
            throw new RuntimeException(
                'The constructor should have failed'
            );
        } catch (Exception $exception) {
            if ($exception instanceof InvalidArgumentException) {
                return throw new RuntimeException(
                    'We expected a different type of exception'
                );
            }

            $this->assertStringContainsString('negative', $exception->getMessage());
        }
    }
}
