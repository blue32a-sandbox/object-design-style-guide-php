<?php
/**
 * 例２－１２　setLogger()を呼び出すことでLoggerを後で提供できる
 */

final class BankStatementImporter
{
    private ?Logger $logger;

    public function __construct()
    {
    }

    public function setLogger(Logger $logger): void
    {
        $this->logger = $logger;
    }

    // ...
}

$importer = new BankStatementImporter();
$importer->setLogger($logger);
