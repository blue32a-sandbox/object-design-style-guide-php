<?php
/**
 * 例９－１４　Importerのイベント発行
 */

final class Importer
{
    private EventDispatcher $dispatcher;

    public function __construct(EventDispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
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

                    $this->dispatcher->dispatch(
                        new HeaderImported($file, $header)
                    );
                } else {
                    $data = /* ... */;

                    $this->dispatcher->dispatch(
                        new LineImported($file, $index)
                    );
                }
            }

            $this->dispatcher->dispatch(
                new FileImported($file)
            );
        }
    }
}
