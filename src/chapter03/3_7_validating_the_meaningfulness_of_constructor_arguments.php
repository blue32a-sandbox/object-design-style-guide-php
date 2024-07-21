<?php
/**
 * 例３－７　コンストラクタ引数が意味をなすかの検証
 */

final class ReservationRequest
{
    public function __construct(
        int $numberOfRoom,
        int $numberOfAdults,
        int $numberOfChildren
    ) {
        if ($numberOfRoom > $numberOfAdults + $numberOfChildren) {
            throw new InvalidArgumentException(
                'Number of rooms should not exceed number of guests'
            );
        }

        if ($numberOfAdults < 1) {
            throw new InvalidArgumentException(
                'numberOfAdults should be at least 1'
            );
        }

        if ($numberOfChildren < 0) {
            throw new InvalidArgumentException(
                'numberOfChildren should be at least 0'
            );
        }

        // ...
    }
}
