<?php
/**
 * 例１－２３　任意のFooインスタンスをbar()に渡すことができる
 */

class Foo
{
    // ...
}

final class Bar
{
    public function bar(Foo $foo): void
    {
        $foo->someMethod();
    }
}
