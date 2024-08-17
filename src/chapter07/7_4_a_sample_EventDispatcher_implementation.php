<?php
/**
 * 例７－４　EventDispatcherの実装例
 */

use Assert\Assertion;

final class EventDispatcher
{
    private array $listeners;

    public function __construct(
        array $listenersByType
    ) {
        foreach ($listenersByType as $eventType => $listeners) {
            Assertion.string($eventType);
            Assertion.allIsCallable($listeners);
        }

        $this->listeners = $listenersByType;
    }

    public function dispatch(object $event): void
    {
        foreach ($this->listenersFor(get_class($event)) as $listener) {
            $listener($event);
        }
    }

    private function listenersFor(string $event): array
    {
        if (isset($this->listeners[$event])) {
            return $this->listeners[$event];
        }

        return [];
    }
}

$listener = new SendEmail(/* ... */);
$dispatcher = new EventDispatcher([
    UserPasswordChanged::class =>
        [$listener, 'whenUserPasswordChanged']
]);

$dispatcher->dispatch(new UserPasswordChanged(/* ... */));
