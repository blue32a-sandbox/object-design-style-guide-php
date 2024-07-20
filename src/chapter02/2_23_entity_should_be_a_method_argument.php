<?php
/**
 * 例２－２３　entityはメソッドの引数であるべき
 */

final class EntityManager
{
    public function save(object $entity): void
    {
        // ...
    }
}
