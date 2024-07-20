<?php
/**
 * 例２－１４　デフォルトのConfigurationオブジェクトを簡単に取得できる
 */

final class MetadataFactory
{
    public function __construct(Configuration $configuration)
    {
        // ...
    }
}

$metadataFactory = new MetadataFactory(
    Configuration::createDefault()
);
