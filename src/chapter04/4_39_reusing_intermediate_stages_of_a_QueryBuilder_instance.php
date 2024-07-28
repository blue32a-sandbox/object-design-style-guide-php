<?php
/**
 * 例４－３９　QueryBuilderインスタンスの中間ステージを再利用する
 */

$queryBuilder = QueryBuilder::create();

$qb1 = $queryBuilder
    ->select(/* ... */)
    ->from(/* ... */)
    ->where(/* ... */)
    ->orderBy(/* ... */);

$qb2 = $queryBuilder
    ->select(/* ... */)
    ->from(/* ... */)
    ->where(/* ... */)
    ->orderBy(/* ... */);
