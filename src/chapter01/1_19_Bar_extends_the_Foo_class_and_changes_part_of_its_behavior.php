<?php
/**
 * 例１－１９　BarはFooクラスを拡張し、その動作の一部を変更
 */

class Foo
{
    public function bar(): void
    {
        // 何かをする
    }
}

class Bar extends Foo
{
    public function bar(): void
    {
        // 別の何かをする
    }
}
