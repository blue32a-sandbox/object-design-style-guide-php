<?php
/**
 * 例３－３４　Coordinatesコンストラクタをテストするための追加のゲッタ
 */

final class Coordinates
{
    // ...

    public function latitude(): float
    {
        return $this->latitude;
    }

    public function longitude(): float
    {
        return $this->longitude;
    }
}
