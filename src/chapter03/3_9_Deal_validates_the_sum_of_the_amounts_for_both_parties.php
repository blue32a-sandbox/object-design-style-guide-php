<?php
/**
 * 例３－９　Dealでの両者の金額の合計の検証
 */

final class Deal
{
    public function __construct(
        int $totalAmount,
        int $amountToFirstParty,
        int $amountToSecondParty
    ) {
        // ...

        if ($amountToFirstParty + $amountToSecondParty
            != $totalAmount) {
            throw new InvalidArgumentException(/* ... */);
        }
    }
}
