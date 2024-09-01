<?php
/**
 * 例９－１３　UserPasswordChangedイベントを発行するChangeUserPassword
 */

final class ChangeUserPassword
{
    private EventDispatcher $eventDispatcher;

    public function __construct(
        /* ... */,
        EventDispatcher $eventDispatcher
    ) {
        // ...
    }

    public function changeUserPassword(
        UserId $userId,
        string $plainTextPassword
    ) {
        $encodedPassword = $this->passwordEncoder->encode(
            $plainTextPassword
        );

        // 新しいパスワードを保存する。

        $this->eventDispatcher->dispatch(
            new UserPasswordChanged($userId)
        );
    }
}

$listener = new SendUserPasswordChangedNotification(/* ... */);
$eventDispatcher = new EventDispatcher([
    UserPasswordChanged::class => [
        $listener,
        'whenUserPasswordChanged'
    ]
]);

$service = new ChangeUserPassword(/* ... */, $eventDispatcher);

$service->changeUserPassword(new UserId(/* ... */), 'Test123');
