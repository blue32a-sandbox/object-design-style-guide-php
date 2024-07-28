<?php
/**
 * 例４－４１　不変性をサポートするwhere()の実装
 */

final class QueryBuilder
{
    // ...

    public function where(string $clause, string $value): QueryBuilder
    {
        $copy = clone $this;

        $copy->whereParts[] = $clause;
        $copy->values[] = $value;

        return $copy;
    }

    // ...
}
