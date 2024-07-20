<?php
/**
 * 例２－１３　何もしないLoggerインターフェースの実装
 */

final class NullLogger implements Logger
{
    public function log(string $message): void
    {
        // 何もしない
    }
}

$importer = new BankStatementImporter(new NullLogger());
