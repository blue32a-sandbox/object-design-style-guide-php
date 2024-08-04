<?php
/**
 * 例６－６　nullオブジェクトを返すことが理に適っている場合もある
 */

final class Foo
{
    public function findOneByType(PageType $type): Page
    {
        $page = /* ... */;

        if (!$page instanceof Page) {
            return new EmptyPage();
        }

        return $page;
    }
}
