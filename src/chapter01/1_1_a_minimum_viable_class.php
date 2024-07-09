<?php
/**
 * 例１－１　最小限のクラス
 */

class Foo
{
    // 何もない
}

$object1 = new Foo();
$object2 = new Foo();

var_dump($object1 === $object2); // false
