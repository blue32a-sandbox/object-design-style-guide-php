<?php
/**
 * 例２－３４　Alertingはint型のコンストラクタ引数を要求とする
 */

final class Alerting
{
    private int $minimumLevel;

    public function __construct(int $minimumLevel)
    {
        $this->minimumLevel = $minimumLevel;
    }
}

$alerting = new Alerting(-99999999);
