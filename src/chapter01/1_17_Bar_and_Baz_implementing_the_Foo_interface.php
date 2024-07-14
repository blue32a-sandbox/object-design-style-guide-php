<?php
/**
 * 例１－１７　Fooインターフェースを「実装」したBarとBaz
 */

Interface Foo
{
    public function foo(): void;
}

class Bar implements Foo
{
}

class Baz implements Foo
{
    public function foo(): void
    {
    }
}
