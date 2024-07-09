<?php
/**
 * 例１－２　インスタンスに対するメソッドの呼び出し
 */

class Foo
{
    public function someMethod(): void
    {
        // 何かの処理を実行
    }
}

$object1 = new Foo();
$object1->someMethod();
