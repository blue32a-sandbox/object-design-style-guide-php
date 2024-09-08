<?php
/**
 * 例１０－６　エンティティ
 */

namespace Domain\Model\Meetup;

use ScheduleMeetup;

final class Meetup
{
    private array $events = [];

    private MeetupId $meetupId;
    private Title $title;
    private ScheduledData $scheduledData;
    private UserId $userId;

    private function __construct()
    {
    }

    public static function create(
        MeetupId $meetupId,
        Title $title,
        ScheduledData $scheduledData,
        UserId $userId
    ): Meetup {
        $meetup = new Meetup();

        $meetup->meetupId = $meetupId;
        $meetup->title = $title;
        $meetup->scheduledData = $scheduledData;
        $meetup->userId = $userId;

        $meetup->recordThat(
            new MeetupScheduled(
                $meetupId,
                $title,
                $scheduledData,
                $userId
            )
        );

        return $meetup;
    }

    public function reschedule(ScheduledData $scheduledData): void
    {
        // ...

        $this->recordThat(
            new MeetupRescheduled($this->meetupId, $scheduledData)
        );
    }

    public function cancel(): void
    {
        // ...
    }

    // ...

    private function recordThat(object $event): void
    {
        $this->events[] = $event;
    }

    private function releaseEvents(): array
    {
        return $this->events;
    }

    public function clearEvents(): void
    {
        $this->events = [];
    }
}

final class Title
{
    private string $title;

    public function __construct(string $title)
    {
        Assertion::notEmpty($title);
        $this->title = $title;
    }

    public static function fromString(string $title): Title
    {
        return new Title($title);
    }

    public function abbreviated(string $elipsis = '...'): string
    {
        // ...
    }
}

final class MeetupId
{
    private string $meetupId;

    public function __construct(string $meetupId)
    {
        Assertion::uuid($meetupId);
        $this->meetupId = $meetupId;
    }

    public static function fromString(string $meetupId): MeetupId
    {
        return new MeetupId($meetupId);
    }
}
