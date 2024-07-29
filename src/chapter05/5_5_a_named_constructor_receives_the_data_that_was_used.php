<?php
/**
 * 例５－５　名前付きコンストラクタで使われたデータを受け取る
 */

final class CouldNotFindStreetName extends RuntimeException
{
    public static function withPostalCode(
        PostalCode $postalCode
    ): CouldNotFindStreetName {
        // ...
    }
}
