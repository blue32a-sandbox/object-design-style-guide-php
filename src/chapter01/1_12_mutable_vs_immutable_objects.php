<?php
/**
 * 例１－１２　ミュータブルオブジェクト vs. イミュータブルオブジェクト
 */

class Mutable
{
    private int $someNumber;

    public function __construct(int $initialNumber)
    {
        $this->someNumber = $initialNumber;
    }

    public function increase(): void
    {
        $this->someNumber = $this->someNumber + 1;
    }
}

class Immutable
{
    private int $someNumber;

    public function __construct(int $initialNumber)
    {
        $this->someNumber = $initialNumber;
    }

    public function increase(): Immutable
    {
        return new Immutable($this->someNumber + 1);
    }
}

$object1 = new Mutable(10);
$object1->increase();

$object2 = new Immutable(10);
$object2 = $object2->increase();
