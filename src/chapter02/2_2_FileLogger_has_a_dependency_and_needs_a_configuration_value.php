<?php
/**
 * 例２－２　FileLoggerサービスには依存関係と設定値が必要
 */

final class FileLogger implements Logger
{
    // ...

    private string $logFilePath;

    public function __construct(
        Formatter $formatter,
        string $logFilePath
    ) {
        // ...

        $this->logFilePath = $logFilePath;
    }

    public function log(string $message): void
    {
        // ...

        file_put_contents(
            $this->logFilePath,
            $formattedMessage,
            FILE_APPEND
        );
    }
}
