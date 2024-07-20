<?php
/**
 * 例２－１０　クライアントはlogFilePathの値を必ずしも渡す必要はない
 */

final class FileLogger implements Logger
{
    public function __construct(
        string $logFilePath = '/tmp/app.log'
    ) {
        // ...
    }
}

$logger = new FileLogger();
