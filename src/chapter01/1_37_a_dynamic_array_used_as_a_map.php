<?php
/**
 * 例１－３７　マップとして使われる動的配列
 */

$emptyMap = [];
$mapOfStrings = [
    'foo' => 'bar',
    'baz' => 'qux',
];

// マップをループ
foreach ($mapOfStrings as $key => $value) {
    // 1: key = 'foo', value = 'bar'
    // 2: key = 'bar', value = 'baz'
}

// 特定のインデックスの値を取得
$fooString = $mapOfStrings['foo'];
$barString = $mapOfStrings['bar'];

// マップにアイテムを追加
$mapOfStrings['baz'] = 'foo';
