<?php
/**
 * 例４－６　add()はQuantityの新しいコピーを返す
 */

use Assert\Assertion;

final class Quantity
{
    private int $quantity;
    private int $scale;

    public function __construct(
        int $quantity,
        int $scale
    ) {
        $this->quantity = $quantity;
        $this->scale = $scale;
    }

    public static function fromInt(
        int $quantity,
        int $scale
    ): Quantity {
        return new Quantity($quantity, $scale);
    }

    public function add(Quantity $other): Quantity
    {
        Assertion::same($this->scale, $other->scale);

        return new Quantity(
            $this->quantity + $other->quantity,
            $this->scale
        );
    }
}
