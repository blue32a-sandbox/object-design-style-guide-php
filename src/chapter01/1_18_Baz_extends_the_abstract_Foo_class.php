<?php
/**
 * 例１－１８　Bazによる抽象クラスFooの拡張
 */

abstract class Foo
{
    abstract public function foo(): void;

    public function bar(): void
    {
        // ...
    }
}

class Baz extends Foo
{
    public function foo(): void
    {
    }
}
