<?php
/**
 * 例１－２５　渡されたFooインスタンスのプロパティへの代入
 */

final class Bar
{
    private Foo $foo;

    public function __construct(Foo $foo)
    {
        $this->foo = $foo;
    }
}
