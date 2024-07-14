<?php
/**
 * 例１－３０　カスタム例外の定義
 */

final class CanNotFindFoo extends RuntimeException
{
    // ...
}

final class Foo
{
    public function someMethod(): void
    {
        if (/* ここで処理を中断すべきか？ */) {
            throw new CanNotFindFoo();
        }

        // ...
    }
}
