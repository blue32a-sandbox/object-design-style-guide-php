<?php
/**
 * 例４－３７　流れるようなインターフェイスを提供するQueryBuilder
 */

$queryBuilder = QueryBuilder::create()
    ->select(/* ... */)
    ->from(/* ... */)
    ->where(/* ... */)
    ->orderBy(/* ... */);
