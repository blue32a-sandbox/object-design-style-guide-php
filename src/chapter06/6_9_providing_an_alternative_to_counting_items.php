<?php
/**
 * 例６－９　アイテムを数えるための代替手段
 */

// 変更前：
final class ShoppingBasket
{
    // ...

    public function getItems(): array
    {
        return $this->items;
    }
}

count($basket->getItems());

// 変更後：
final class ShoppingBasket
{
    // ...

    public function itemCount(): int
    {
        return count($this->items);
    }
}

$basket->itemCount();
