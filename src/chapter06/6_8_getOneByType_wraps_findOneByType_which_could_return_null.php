<?php
/**
 * 例６－８　getOneByType()でnullを返す可能性のあるfindeOneByType()をラップする
 */

final class Foo
{
    public function getOneByType(PageType $type): Page
    {
        $page = $this->findOneByType($type);

        if (!$page instanceof Page) {
            return PageNotFound::withType($type);
        }

        return $page;
    }
}
