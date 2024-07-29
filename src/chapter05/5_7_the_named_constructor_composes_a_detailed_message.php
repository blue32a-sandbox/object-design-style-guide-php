<?php
/**
 * 例５－７　名前付きコンストラクタが詳細なメッセージを構築する
 */

// 変更前：
final class CouldNotFindProduct extends RuntimeException
{
}

// 呼び出し側：
throw new CouldNotFindProduct(
    "Could not find a product with ID '{$productId}'"
);

// 変更後：
final class CouldNotFindProduct extends RuntimeException
{
    public static function withId(
        ProductId $productId
    ): CouldNotFindProduct {
        return new CouldNotFindProduct(
            "Could not find a product with ID '{$productId}'"
        );
    }
}

// 呼び出し側：
throw CouldNotFindProduct::withId($productId);
