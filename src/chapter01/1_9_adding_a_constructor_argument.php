<?php
/**
 * 例１－９　コンストラクタ引数の追加
 */

class Foo
{
    private int $someNumber;

    public function __construct(int $initialNumber)
    {
        $this->someNumber = $initialNumber;
    }
}

$object1 = new Foo(); // うまくいかない
$object2 = new Foo(20);
