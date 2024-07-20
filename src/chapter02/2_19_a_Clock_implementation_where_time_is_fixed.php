<?php
/**
 * 例２－１９　時間を固定するClockの実装
 */

final class FixedClock implements Clock
{
    private DateTime $now;

    public function __construct(DateTime $now)
    {
        $this->now = $now;
    }

    public function currentTime(): DateTime
    {
        return $this->now;
    }
}

$meetupRepository = new MeetupRepository(
    new FixedClock(
        new DateTime('2018-12-24 11:16:05')
    )
);
$meetupRepository->findUpcomingMeetups('NL');
