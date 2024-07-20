<?php
/**
 * 例２－２１　単一のオブジェクトを保存するためにのみ使用可能なEntityManager
 */

final class EntityManager
{
    private object $entity;

    public function __construct(object $entity)
    {
        $this->entity = $entity;
    }

    public function save(): void
    {
        // ...
    }
}

$user = new User(/* ... */);
$comment = new Comment(/* ... */);

$entityManager = new EntityManager($user);
$entityManager->save();

$entityManager = new EntityManager($comment);
$entityManager->save();
