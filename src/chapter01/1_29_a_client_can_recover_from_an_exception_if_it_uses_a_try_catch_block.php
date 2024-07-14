<?php
/**
 * 例１－２９　クライアントはtry/catchブロックを使用すれば例外から回復できる
 */

$foo = new Foo();

try {
    $foo->someMethod();
} catch (Exception $e) {
    // ...
}
