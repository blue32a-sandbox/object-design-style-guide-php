<?php
/**
 * 例３－３８　ScheduleMeetup DTOの検証
 */

final class ScheduleMeetup
{
    public string $title;
    public string $date;

    public function validate(): array
    {
        $errors = [];

        if ($this->title == '') {
            $errors['title'][] = 'validation.empty_title';
        }

        if ($this->date == '') {
            $errors['date'][] = 'validation.empty_date';
        }

        DateTime::createFromFormat('Y-m-d', $this->date);
        if (DateTime::getLastErrors()['error_count'] > 0) {
            $errors['date'][] = 'validation.invalid_date_format';
        }

        return $errors;
    }
}
