<?php
/**
 * 例２－１　FileLoggerサービス
 */

interface Logger
{
    public function log(string $message): void;
}

final class FileLogger implements Logger
{
    private Formatter $formatter;

    public function __construct(Fomatter $formatter)
    {
        $this->formatter = $formatter;
    }

    public function log(string $message): void
    {
        $formattedMessage = $this->formatter->format($message);

        // ...
    }
}

$logger = new FileLogger(new DefaultFormatter());
$logger->log('A message');
