<?php
/**
 * 例６－１０　クライアントはProductのゲッタを使って判断を下す
 */

final class Product
{
    public function shouldDiscountPercentageBeApplied(): bool
    {
        // ...
    }

    public function discountPercentage(): Percentage
    {
        // ...
    }

    public function fixedDiscountAmount(): Money
    {
        // ...
    }
}

$amount = new Money(/* ... */);
if ($product->shouldDiscountPercentageBeApplied()) {
    $netAmount = $product->discountPercentage()->applyTo($amount);
} else {
    $netAmount = $amount->subtract($product->fixedDiscountAmount());
}
