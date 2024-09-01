<?php
/**
 * 例９－１６　ImporterはEventDispatcherの代わりにImportNotificationsを呼び出す
 */

final class Importer
{
    private ImportNotifications $notify;

    public function __construct(ImportNotifications $notify)
    {
        $this->notify = $notify;
    }

    public function import(string $csvDirectory): void
    {
        foreach (Finder::in($csvDirectory)->files() as $file) {
            // ファイルの読み込み
            $lines = /* ... */;

            foreach ($lines as $index => $line) {
                if ($index === 0) {
                    // ヘッダーのパース
                    $header = /* ... */;

                    $this->notify->whenHeaderImported($file, $header);
                } else {
                    $data = /* ... */;

                    $this->notify->whenLineImported($file, $index);
                }
            }

            $this->notify->whenFileImported($file);
        }
    }
}
