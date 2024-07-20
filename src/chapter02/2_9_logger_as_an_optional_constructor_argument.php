<?php
/**
 * 例２－９　省略可能なコンストラクタ引数としてのLogger
 */

final class BankStatementImporter
{
    private ?Logger $logger;

    public function __construct(?Logger $logger = null)
    {
        $this->logger = $logger;
    }

    public function import(string $bankStatementFilePath): void
    {
        // 銀行取引明細のファイルをインポート

        // 必要に応じてデバッグのために何かしらの情報をログに記録
    }
}

$importer = new BankStatementImporter();
