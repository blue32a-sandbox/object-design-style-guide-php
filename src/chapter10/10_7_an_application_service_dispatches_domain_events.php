<?php
/**
 * 例１０－７　アプリケーションサービスがドメインイベントを発行する
 */

final class RescheduleMeetupService
{
    private EventDipatcher $dispatcher;

    public function __construct(
        // ...
        EventDispatcher $dispatcher
    ) {
        $this->dispatcher = $dispatcher;
    }

    public function reschedule(MeetupId $meetupId, /* ... */): void
    {
        $meetup = /* ... */;

        $meetup->reschedule(/* ... */);

        $this->dispatcher->dispatchAll($meetup->releaseEvents());
    }
}
