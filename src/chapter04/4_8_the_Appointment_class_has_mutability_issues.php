<?php
/**
 * 例４－８　Appointmentクラスには変更可能性の問題がある
 */

final class Appointment
{
    private DateTime $time;

    public function __construct(DateTime $time)
    {
        $this->time = $time;
    }

    public function time(): string
    {
        return $this->time->format('h:s');
    }

    public function reminderTime(): string
    {
        $oneHourBefore = '-1 hour';

        $reminderTime = $this->time->modify($oneHourBefore);

        return $reminderTime->format('h:s');
    }
}


$appointment = new Appointment(new DateTime('12:00'));

$time = $appointment->time();

$reminderTime = $appointment->reminderTime();

$time = $appointment->time();
