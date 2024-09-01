<?php
/**
 * 例９－１２　UserPasswordChangedイベントクラスとそのリスナ
 */

final class UserPasswordChanged
{
    private UserId $userId;

    public function __construct(UserId $userId)
    {
        $this->userId = $userId;
    }
}

final class SendUserPasswordChangedNotification
{
    // ...

    public function whenUserPasswordChanged(
        UserPasswordChanged $event
    ): void {
        // メールを送る。
    }
}
