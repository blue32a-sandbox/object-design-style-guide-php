<?php
/**
 * 例２－３５　代入する前にコンストラクタ引数を検証する
 */

final class Alerting
{
    private int $minimumLevel;

    public function __construct(int $minimumLevel)
    {
        if ($minimumLevel <= 0) {
            throw new InvalidArgumentException(
                'Minimum alerting level should be greater than 0'
            );
        }

        $this->minimumLevel = $minimumLevel;
    }
}

$alerting = new Alerting(-99999999);
