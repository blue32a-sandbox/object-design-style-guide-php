<?php
/**
 * 例１０－４　アプリケーションサービスを呼び出す際にDTOを渡す例
 */

namespace Application\ScheduleMeetup;

final class ScheduleMeetup
{
    public string $title;
    public string $date;
}

final class ScheduleMeetupService
{
    // ...

    public function schedule(
        ScheduleMeetup $command,
        UserId $currentUserId
    ): MeetupId {
        $meetup = Meetup::schedule(
            $this->meetupRepository->nextIdentity(),
            Title::fromString($command->title),
            ScheduleDate::fromString($command->date),
            $currentUserId
        );

        // ...
    }
}
