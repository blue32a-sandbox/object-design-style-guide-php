<?php
/**
 * 例５－２　getRowById()がRuntimeExceptionを投げる
 */

use Assert\Assertion;

final class Foo
{
    public function getRowById(int $id): array
    {
        Assertion::greaterThan($id, 0, 'ID should be greater than 0');

        $record = $this->db->find($id);

        if ($record === null) {
            throw new RuntimeException(
                "Could not find record with ID '{$id}'"
            );
        }

        return $record;
    }
}
