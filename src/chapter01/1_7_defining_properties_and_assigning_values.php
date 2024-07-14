<?php
/**
 * 例１－７　プロパティの定義と値の代入
 */

class Foo
{
    private int $someNumber;
    private string $someString;

    public function __construct()
    {
        $this->someNumber = 10;
        $this->someString = 'Hello, world!';
    }
}

$object1 = new Foo();
