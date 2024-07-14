<?php
/**
 * 例１－１０　publicプロパティの定義と使用
 */

class Foo
{
    public int $someNumber;
    public string $someString;

    public function __construct()
    {
        $this->someNumber = 5;
        $this->someString = 'Hello';
    }
}

$object1 = new Foo();
$number = $object1->someNumber;
$object1->someString = 'Cliché';
