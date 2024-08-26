<?php
/**
 * 例７－１３　EventDispatcherのスパイ
 */

final class EventDispatcherSpy implements EventDispatcher
{
    private array $events = [];

    public function dispatch(object $event): void
    {
        $this->events[] = $event;
    }

    public function dispatchedEvents(): array
    {
        return $this->events;
    }
}

class ChangePasswordServceTest extends TestCase
{
    public function it_dispatches_a_user_password_changed_event(): void
    {
        // ...

        $eventDispatcher = new EventDispatcherSpy();
        $service = new ChangePasswordServce($eventDispatcher, /* ... */);

        $service->changeUserPasword($userId, /* ... */);

        $this->assertEquals(
            [
                new UserPasswordChanged($userId)
            ],
            $eventDispatcher->dispatchedEvents()
        );
    }
}
