<?php
/**
 * 例１－１３　オブジェクトの振る舞いはパブリックメソッドとして定義される
 */

class Foo
{
    public function someMethod(): int
    {
        return 5;
    }

    public function someOtherMethod(): void
    {
        // ...
    }
}

$object1 = new Foo();
$value = $object1->someMethod();

$object1->someOtherMethod();
