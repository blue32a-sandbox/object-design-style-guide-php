<?php
/**
 * 例７－３　イベントを使ってタスクを複数に分割する
 */

final class UserPasswordChanged
{
    private UserId $userId;

    public function __construct(UserId $userId)
    {
        $this->userId = $userId;
    }

    public function userId(): UserId
    {
        return $this->userId;
    }
}

class Foo
{
    public function changeUserPassword(
        UserId $userId,
        string $plainTextPassword
    ): void {
        $user = $this->repository->getById($userId);
        $hashedPassword = /* ... */;
        $user->changePassword($hashedPassword);
        $this->repository->save($user);

        $this->eventDisptcher->dispatch(
            new UserPasswordChanged($userId)
        );
    }
}

final class SendEmail
{
    // ...

    public function whenUserPasswordChanged(
        UserPasswordChanged $event
    ): void {
        $this->mailer->sendPasswordChangedEmail($event->userId());
    }
}
