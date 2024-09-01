<?php
/**
 * 例９－１５　単一の抽象ですべてのインポートイベントを置き換える
 */

interface ImportNotifications
{
    public function whenHeaderImported(
        string $file,
        array $header
    ): void;

    public function whenLineImported(
        string $file,
        int $index
    ): void;

    public function whenFileImported(
        string $file
    ): void;
}

final class ImportLogging implements ImportNotifications
{
    private Logger $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function whenHeaderImported(
        string $file,
        array $header
    ): void {
        $this->logger->debug('Imported header ...');
    }

    // など
}
