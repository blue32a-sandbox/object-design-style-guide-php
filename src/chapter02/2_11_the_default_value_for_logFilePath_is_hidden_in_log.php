<?php
/**
 * 例２－１１　logFilePathのデフォルト値がlog()の中に隠されている
 */

final class FileLogger implements Logger
{
    private ?string $logFilePath;

    public function __construct(?string $logFilePath = null)
    {
        $this->logFilePath = $logFilePath;
    }

    public function log(string $message): void
    {
        // ...

        file_put_contents(
            $this->logFilePath != null ? $this->logFilePath : '/tmp/app.log',
            $formattedMessage,
            FILE_APPEND
        );
    }
}
