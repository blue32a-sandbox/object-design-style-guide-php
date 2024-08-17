<?php
/**
 * 例７－２　changePassword()は多くのことをやりすぎている
 */

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
        $this->mailer->sendPasswordChangedEmail($userId);
    }
}
