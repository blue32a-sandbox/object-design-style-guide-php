<?php
/**
 * 例３－１３　SpecificExceptionを補足して処理できる
 */

final class SpecificException extends InvalidArgumentException
{
}

try {
    // オブジェクトを作ろうとする
} catch (SpecificException $exception) {
    // この特定の問題に応じた方法で対処する
}
