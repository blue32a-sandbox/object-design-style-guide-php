<?php
/**
 * 例２－２７　リスナは作成時にしか設定できない
 */

final class EventManager
{
    private array $listeners;

    public function __construct(array $listenersByEventName)
    {
        $this->listeners = $listenersByEventName;
    }

    // ...
}
