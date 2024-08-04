<?php
/**
 * 例６－４　isValid()は分かりにくいメソッドである
 */

final class Foo
{
    public function isValid(string $emailAddress): mixed
    {
        if (/* ... */) {
            return 'Invalid email address';
        }

        return true;
    }
}
