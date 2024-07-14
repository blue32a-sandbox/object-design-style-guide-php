<?php
/**
 * 例１－２７　return文でメソッドをそれ以上実行しない
 */

final class Foo
{
    public function someMethod(): void
    {
        if (/* ここで処理を中断すべきか？ */) {
            return;
        }

        // ...
    }

    public function omeOtherMethod(): bool
    {
        if (/* ここで処理を中断すべきか？ */) {
            return false;
        }

        // ...

        return true;
    }
}
