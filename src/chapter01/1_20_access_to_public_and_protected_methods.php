<?php
/**
 * 例１－２０　publicおよびprotectedメソッドへのアクセス
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
    public function someMethod(): void
    {
        $this->foo();
        $this->bar();
        // $this->baz();
    }
}
