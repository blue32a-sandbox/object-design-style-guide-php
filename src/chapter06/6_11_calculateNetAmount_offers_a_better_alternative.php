<?php
/**
 * 例６－１１　calculateNetAmount()は、よりよい選択肢を提供する
 */

final class Product
{
    public function calculateNetAmount(Money $amount): Money
    {
        if ($this->shouldDiscountPercentageBeApplied()) {
            return $this->discountPercentage()->applyTo($amount);
        }

        return $amount->subtract($this->fixedDiscountAmount());
    }

    private function shouldDiscountPercentageBeApplied(): bool
    {
        // ...
    }

    private function discountPercentage(): Percentage
    {
        // ...
    }

    private function fixedDiscountAmount(): Money
    {
        // ...
    }
}

$amount = new Money(/* ... */);
$netAmount = $product->calculateNetAmount($amount);
