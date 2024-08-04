<?php
/**
 * 例６－５　getById()はユーザーを返すか、例外を投げる
 */

final class Foo
{
    public function getById(int $id): User
    {
        $user = /* ... */;

        if (/* ... */) {
            throw UserNotFound::withId($id);
        }

        return $user;
    }
}
