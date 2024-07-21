<?php
/**
 * 例３－２７　string型の日付をラップするDateクラス
 */

final class Date
{
    /** @var string */
    private const FORMAT = 'd/m/Y';
    private DateTime $date;

    public function __construct()
    {
        // ここでは何もしない
    }

    public static function fromString(string $date): Date
    {
        $object = new Date();

        $dateTime = DateTime::createFromFormat(
            Date::FORMAT,
            $date
        );

        $object->date = $dateTime;

        return $object;
    }
}

$date = Date::fromString('1/4/2019');
