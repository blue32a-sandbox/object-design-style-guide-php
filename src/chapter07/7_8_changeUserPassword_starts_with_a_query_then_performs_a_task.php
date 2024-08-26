<?php
/**
 * 例７－８　changeUserPassword()はクエリで始まり、タスクを実行する
 */

final class Foo
{
    public function changeUserPassword(
        UserId $userId,
        string $plainTextPassword
    ): void {
        $user = $this->repository->getById($userId);
        $hasedPassword = /* ... */;
        $user->changePassword($hasedPassword);
        $this->repository->save($user);
        $this->eventDispatcher.dispatch(
            new UserPasswordChanged($userId)
        );
    }
}
