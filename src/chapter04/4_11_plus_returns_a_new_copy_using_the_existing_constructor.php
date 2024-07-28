<?php
/**
 * 例４－１１　plus())は既存のコンストラクタを使用して新しいコピーを返す
 */

final class Integer
{
    private int $integer;

    public function __construct(int $integer)
    {
        $this->integer = $integer;
    }

    public function plus(Integer $other): Integer
    {
        return new Integer($this->integer + $other->integer);
    }
}
