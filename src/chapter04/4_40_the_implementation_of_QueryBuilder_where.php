<?php
/**
 * 例４－４０　QueryBuilder->where()の実装
 */

final class QueryBuilder
{
    // ...

    public function where(string $clause, strin $value): QueryBuilder
    {
        $this->whereParts[] = $clause;
        $this->values[] = $value;

        return $this;
    }

    // ...
}
