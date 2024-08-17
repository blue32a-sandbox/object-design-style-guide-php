<?php
/**
 * 例７－１　命令形の名前を持つコマンドメソッド
 */

class Foo
{
    public function sendRemainderEmail(
        EmailAddress $recipient,
        // ...
    ): void {
        // ...
    }

    public function saveRecord(Record $record): void
    {
        // ...
    }
}
