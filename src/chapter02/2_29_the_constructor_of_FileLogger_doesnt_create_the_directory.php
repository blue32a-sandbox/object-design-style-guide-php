<?php
/**
 * 例２－２９　FileLoggerのコンストラクタはディレクトリを作成しない
 */

final class FileLogger implements Logger
{
    private string $logFilePath;

    public function __construct(string $logFilePath)
    {
        $this->logFilePath = $logFilePath;
    }

    public function log(string $message): void
    {
        $this->ensureLogFileExists();

        // ...
    }

    private function ensureLogFileExists(): void
    {
        if (is_file($this->logFilePath)) {
            return;
        }

        $logFileDirectory = dirname($this->logFilePath);
        if (!is_dir($logFileDirectory)) {
            mkdir($logFileDirectory, 0777, true);
        }

        touch($this->logFilePath);
    }
}
