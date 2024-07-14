<?php
/**
 * 例１－１１　ほかのインスタンスのprivateプロパティへのアクセス
 */

class Foo
{
    private int $someNumber;

    public function __construct(int $number)
    {
        $this->someNumber = $number;
    }

    public function getSomeNumber(): int
    {
        return $this->someNumber;
    }

    public function getSomeNumberFrom(Foo $other): int
    {
        return $other->someNumber;
    }
}

$object1 = new Foo(5);
$object2 = new Foo(10);

echo $object2->getSomeNumberFrom($object1) . PHP_EOL;
