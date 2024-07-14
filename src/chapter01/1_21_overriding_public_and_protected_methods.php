<?php
/**
 * 例１－２１　publicおよびprotectedメソッドのオーバーライド
 */

class Foo
{
    public function foo(): void
    {
        // 何かをする
    }

    protected function bar(): void
    {
    }

    private function baz(): void
    {
    }
}

class Bar extends Foo
{
    public function foo(): void
    {
        // ...
    }

    protected function bar(): void
    {
        // ...
    }

    private function baz(): void
    {
        // オーバーライドできない
    }
}
