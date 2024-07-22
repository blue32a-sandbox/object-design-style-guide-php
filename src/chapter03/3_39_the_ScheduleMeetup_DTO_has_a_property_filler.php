<?php
/**
 * 例３－３９　プロパティフィラーを持つScheduleMeetup DTO
 */

final class ScheduleMeetup
{
    public string $title;
    public string $date;

    public static function fromFormData(
        array $formData
    ): ScheduleMeetup {
        $scheduleMeetup = new ScheduleMeetup();

        $scheduleMeetup->title = $formData['title'];
        $scheduleMeetup->date = $formData['date'];

        return $scheduleMeetup;
    }
}
