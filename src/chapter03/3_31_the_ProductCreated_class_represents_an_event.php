<?php
/**
 * 例３－３１　ProductCreatedクラスはイベントを表す
 */

final class ProductCreated
{
    public function __construct(
        ProductId $productId,
        Description $description,
        StockValuation $stockValuation,
        Timestamp $timestamp,
        UserId $createdBy,
        /* ... */
    ) {
        // ...
    }
}

$this->recordTat(
    new ProductCreated(
        /* ... */
    )
);
