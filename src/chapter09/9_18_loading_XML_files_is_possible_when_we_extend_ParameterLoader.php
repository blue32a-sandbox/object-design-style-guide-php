<?php
/**
 * 例９－１８　ParameterLoaderを拡張してXMLファイルの読み込みを可能にする
 */

final class XmlFileParameterLoader extends ParameterLoader
{
    protected function loadFile($filePath): array
    {
        $rawXml = file_get_contents($filePath);

        // 配列に変換

        return /* ... */;
    }
}
