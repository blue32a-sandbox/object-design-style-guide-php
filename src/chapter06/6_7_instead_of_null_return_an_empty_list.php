<?php
/**
 * 例６－７　nullの代わりに空のリストを返す
 */

final class Foo
{
    public function eventListenersForEvent(string $eventName): array
    {
        if (!isset($this->listeners[$eventName])) {
            return [];
        }

        return $this->listeners[$eventName];
    }
}
