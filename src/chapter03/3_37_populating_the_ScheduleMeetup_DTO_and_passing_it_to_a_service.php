<?php
/**
 * 例３－３７　ScheduleMeetup DTOを作成しサービスに渡す
 */

final class MeetupController
{
    public function scheduleMeetupAction(Request $request): Response
    {
        $formDate = /* ... */;

        $scheduleMeetup = new ScheduleMeetup();
        $scheduleMeetup->title = $formDate['title'];
        $scheduleMeetup->date = $formDate['date'];

        $this->scheduleMeetupService->execute($scheduleMeetup);

        // ...
    }
}
