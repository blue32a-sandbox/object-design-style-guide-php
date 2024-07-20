<?php
/**
 * 例２－２０　メソッド引数として現在時刻を渡すこともできる
 */

final class MeetupRepository
{
    public function __construct(/* ... */)
    {
        // ...
    }

    public function findUpcomingMeetups(
        string $area,
        DateTime $now
    ): array {
        // ...
    }
}
