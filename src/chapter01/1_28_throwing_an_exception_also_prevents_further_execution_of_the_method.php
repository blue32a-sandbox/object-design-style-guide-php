<?php
/**
 * 例１－２８　例外を投げると、それ以降のメソッドの処理は実行されない
 */

final class Foo
{
    public function someMethod(): void
    {
        if (/* ここで処理を中断すべきか？ */) {
            throw new RuntimeException(
                'Something is wrong'
            );
        }

        // ...
    }
}
