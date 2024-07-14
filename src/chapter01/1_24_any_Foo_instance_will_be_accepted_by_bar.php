<?php
/**
 * 例１－２４　bar()は任意のFooインスタンスを受け付ける
 */

interface Foo
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
