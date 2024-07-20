<?php
/**
 * 例２－３１　LoggerFactoryがFileLoggerが必要とするすべてのことを引き受ける
 */

final class FileLogger implements Logger
{
    private string $logFilePath;

    /**
     * @param string $logFilePath すでに存在し、書き込み可能なログファイルの絶対パス
     */
    public function __construct(string $logFilePath)
    {
        $this->logFilePath = $logFilePath;
    }

    // ...
}

final class Loggerfactory
{
    public function createFileLogger(string $logFilePath): FileLogger
    {
        if (!is_file($logFilePath)) {
            $logFileDirectory = dirname($logFilePath);
            if (!is_dir($logFileDirectory)) {
                mkdir($logFileDirectory, 0777, true);
            }

            touch($logFilePath);
        }

        if (!is_writable($logFilePath)) {
            throw new InvalidArgumentException(
                "Log file path '{$logFilePath}' should be writable"
            );
        }

        return new FileLogger($logFilePath);
    }
}
