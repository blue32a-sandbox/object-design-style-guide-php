<?php
/**
 * 例２－２６　インスタンス化後にEventDispatcherの振る舞いを変更できる
 */

final class EventDispatcher
{
    private array $listeners = [];

    public function addListener(
        string $event,
        callable $listener
    ): void {
        $this->listeners[$event][] = $listener;
    }

    public function removeListener(
        string $event,
        callable $listener
    ): void {
        foreach ($this->listenersFor($event) as $key => $callable) {
            if ($callable == $listener) {
                unset($this->listeners[$event][$key]);
            }
        }
    }

    public function dispatch(object $event): void
    {
        foreach ($this->listenersFor($event::class) as $callable) {
            $callable($event);
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
