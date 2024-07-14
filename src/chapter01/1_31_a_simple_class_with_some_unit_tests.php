<?php
/**
 * 例１－３１　ユニットテストを含むシンプルなクラス
 */

final class Foo
{
    private int $someNumber;

    public function __construct(int $startWith)
    {
        $this->someNumber = $startWith;
    }

    public function increment(): void
    {
        $this->someNumber++;
    }

    public function someNumber(): int
    {
        return $this->someNumber;
    }
}

use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    /**
     * @test
     */
    public function youCanStartWithGivenNumber(): void
    {
        // Arrange
        $foo = new Foo(10);

        // Act
        // Assert
        $this->assertEquals(10, $foo->someNumber());
    }

    /**
     * @test
     */
    public function youCanIncrementTheNumber(): void
    {
        // Arrange
        $foo = new Foo(10);

        // Act
        $foo->increment();

        // Assert
        $this->assertEquals(11, $foo->someNumber());
    }
}
