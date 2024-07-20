<?php
/**
 * 例２－３０　LoggerFactoryがログファイルのディレクトリを作成する
 */

final class FileLogger implements Logger
{
    private string $logFilePath;

    public function __construct(string $logFilePath)
    {
        if (!is_writable($logFilePath)) {
            throw new InvalidArgumentException(
                "Log file path '{$logFilePath}' should be writable"
            );
        }
        $this->logFilePath = $logFilePath;
    }

    public function log(string $message): void
    {
        // ...
    }
}

final class LoggerFactory
{
    public function createLogger(string $logFilePath): FileLogger
    {
        if (!is_file($logFilePath)) {
            $logFileDirectory = dirname($logFilePath);
            if (!is_dir($logFileDirectory)) {
                mkdir($logFileDirectory, 0777, true);
            }
            touch($logFilePath);
        }

        return new FileLogger($logFilePath);
    }
}
