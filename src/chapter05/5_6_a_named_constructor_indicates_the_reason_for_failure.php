<?php
/**
 * 例５－６　名前付きコンストラクタで失敗の理由を示す
 */

final class InvalidTargetPosition extends LogicException
{
    public static function becauseItIsOutsideTheMap(
        /* ... */
    ): InvalidTargetPosition {
        // ...
    }
}
