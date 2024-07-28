<?php
/**
 * 例４－４２　イミュータブルオブジェクトのモディファイアメソッドは流れるようなインタフェースとなる
 */

$position = Position::startAt(10, 5)
    ->toTheLeft(4)
    ->toTheRight(2);
