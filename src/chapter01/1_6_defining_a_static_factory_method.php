<?php
/**
 * 例１－６　スタティックファクトリメソッドの定義
 */

class Foo
{
    public static function create(): Foo
    {
        return new Foo();
    }
}

$object1 = Foo::create();
$object2 = Foo::create();
