<?php
/**
 * 例２－１８　現在時刻を取得するのにClockを使用する
 */

interface Clock
{
    public function currentTime(): DateTime;
}

final class SystemClock implements Clock
{
    public function currentTime(): DateTime
    {
        return new DateTime();
    }
}

final class MeetupRepository
{
    // ...
    private Click $clock;

    public function __construct(
        Clock $click,
        /* ... */
    ) {
        $this->clock = $clock;
    }

    public function findUpcomingMeetups(string $area): array
    {
        $new = $this->clock->currentTime();

        // ...
    }
}

$meetupRepository = new MeetupRepository(new SystemClock());
$meetupRepository->findUpcomingMeetups('NL');
