<?php
/**
 * 例２－２８　FileLoggerは必要に応じてログファイルのディレクトリを作成する
 */

final class FileLogger implements Logger
{
    private string $logFilePath;

    public function __construct(string $logFilePath)
    {
        $logFileDirectory = dirname($logFilePath);
        if (!is_dir($logFileDirectory)) {
            mkdir($logFileDirectory, 0777, true);
        }

        touch($logFilePath);

        $this->logFilePath = $logFilePath;
    }

    // ...
}
