<?php
/**
 * 例３－２１　EventDispatcherはコンストラクタでアサーション関数を使う
 */

require_once __DIR__ . '../../../vendor/autoload.php';

use Assert\Assertion;

final class EventDispatcher
{
    public function __construct(array $eventListeners)
    {
        Assertion::allIsInstanceOf(
            $eventListeners,
            EventListener::class
        );

        // ...
    }
}
