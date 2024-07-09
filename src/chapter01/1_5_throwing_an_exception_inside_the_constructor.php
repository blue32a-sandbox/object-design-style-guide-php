<?php
/**
 * 例１－５　コンストラクタの内で例外を投げる
 */

class Foo
{
    public function __construct()
    {
        throw new RuntimeException();
    }
}

try {
    $object1 = new Foo();
} catch (RuntimeException $e) {
    // ここでは`object1`は未定義となる
}
