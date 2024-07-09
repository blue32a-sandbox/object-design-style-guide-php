<?php
/**
 * 例１－３　スタティックメソッドの定義
 */

class Foo
{
    public function anObjectMethod(): void
    {
        // ...
    }

    public static function aStaticMethod(): void
    {
        // ...
    }
}

$object1 = new Foo();
$object1->anObjectMethod();

Foo::aStaticMethod();
