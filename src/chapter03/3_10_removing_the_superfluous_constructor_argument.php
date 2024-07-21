<?php
/**
 * 例３－１０　余分なコンストラクタ引数を削除
 */

final class Deal
{
    private int $amountToFirstParty;
    private int $amountToSecondParty;

    public function __construct(
        int $amountToFirstParty,
        int $amountToSecondParty
    ) {
        if ($amountToFirstParty <= 0) {
            throw new InvalidArgumentException(/* ... */);
        }
        $this->amountToFirstParty = $amountToFirstParty;

        if ($amountToSecondParty <= 0) {
            throw new InvalidArgumentException(/* ... */);
        }
        $this->amountToSecondParty = $amountToSecondParty;
    }

    public function totalAmount(): int
    {
        return $this->amountToFirstParty
            + $this->amountToSecondParty;
    }
}
