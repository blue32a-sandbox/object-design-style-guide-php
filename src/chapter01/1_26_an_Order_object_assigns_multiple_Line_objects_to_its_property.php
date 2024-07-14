<?php
/**
 * 例１－２６　Orderオブジェクトは、そのプロパティに複数のLineオブジェクトを代入する
 */

final class Order
{
    private array $lines;

    public function __construct(array $lines)
    {
        $this->lines = $lines;
    }
}
