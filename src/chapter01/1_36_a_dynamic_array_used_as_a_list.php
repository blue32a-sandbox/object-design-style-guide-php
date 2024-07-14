<?php
/**
 * 例１－３６　リストとして使われる動的配列
 */

$emptyList = [];
$listOfStrings = ['foo', 'bar'];

// リストをループ
foreach ($listOfStrings as $key => $value) {
    // 1: key = 0, value = 'foo'
    // 2: key = 1, value = 'bar'
}

foreach ($listOfStrings as $value) {
    // 1: value = 'foo'
    // 2: value = 'bar'
}

// 特定のインデックスの値を取得
$fooString = $listOfStrings[0];
$barString = $listOfStrings[1];

// リストにアイテムを追加
$listOfStrings[] = 'baz';
