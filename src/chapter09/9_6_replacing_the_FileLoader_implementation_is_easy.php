<?php
/**
 * 例９－６　FileLoaderの実装を置き換えるのは簡単
 */

final class XmlFileLoader implements FileLoader
{
    // ...
}

$parameterLoader = new ParameterLoader(new XmlFileLoader());
$parameterLoader->load(__DIR__ . '/parameters.xml');
