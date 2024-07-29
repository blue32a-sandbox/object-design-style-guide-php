<?php
/**
 * 例５－４　複数の名前付きコンストラクタを持つ例外クラス
 */

final class CouldNotPersistObject extends RuntimeException
{
    public static function becauseDatabaseIsNotAvailable(): CouldNotPersistObject
    {
        return new CouldNotPersistObject(/* ... */);
    }

    public static function becauseMappingConfigurationIsInvalid(): CouldNotPersistObject
    {
        return new CouldNotPersistObject(/* ... */);
    }

    // ...
}
