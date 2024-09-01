<?php
/**
 * 例９－１０　CachedFileLoaderは必要な場合のみ実際のローダを呼び出す
 */

final class CachedFileLoader implements FileLoader
{
    private FileLoader $realLoader;

    private $cache = [];

    public function __construct(FileLoader $realLoader)
    {
        $this->realLoader = $realLoader;
    }

    public function loadFile(string $filePath): array
    {
        if (isset($this->cache[$filePath])) {
            return $this->cache[$filePath];
        }

        $result = $this->realLoader->loadFile($filePath);

        $this->cache[$filePath] = $result;

        return $result;
    }
}

$loader = new CachedFileLoader(new JsonFileLoader());

$loader->loadFile('parameter.json'); // JsonFileLoaderへ呼び出しを転送する

$loader->loadFile('parameter.json'); // キャッシュから返す
