<?php
/**
 * 例７－１２　モックを使用したChangePasswordServiceのユニットテスト
 */

final class ChangePasswordServce
{
    private EventDispatcher $eventDispatcher;

    // ...

    public function __construct(
        EventDispatcher $eventDispatcher,
        // ...
    )  {
        $this->eventDispatcher = $eventDispatcher;

        // ...
    }

    public function changeUserPasword(
        UserId $userId,
        string $plainTextPassword
    ): void {
        // ...

        $this->eventDispatcher->dispatch(
            new UserPasswordChanged($userId)
        );
    }
}

class ChangePasswordServceTest extends TestCase
{
    public function it_dispatches_a_user_password_changed_event(): void
    {
        $userId = /* ... */;

        $eventDispatcherMock = $this->createMock(EventDispatcher::class);
        $eventDispatcherMock
            ->expects($this->once())
            ->method('dispatch')
            ->with(new UserPasswordChanged($userId));

        $service = new ChangePasswordServce($eventDispatcherMock, /* ... */);

        $service->changeUserPasword($userId, /* ... */);
    }
}
