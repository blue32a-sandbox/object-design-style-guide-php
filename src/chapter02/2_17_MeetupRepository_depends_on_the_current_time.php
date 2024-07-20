<?php
/**
 * 例２－１７　MeetupRepositoryは現在時刻に依存する
 */

final class MeetupRepository
{
    private Connection $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function findUpcomingMeetups(strin $area): array
    {
        $now = new DateTime();

        return $this->findMeetupsScheduledAfter($now, $area);
    }

    public function findMeetupsScheduledAfter(
        DateTime $date,
        string $area
    ): array {
        // ...
    }
}
