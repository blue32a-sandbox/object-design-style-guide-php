<?php
/**
 * 例４－２２　TotalDistanceTraveledは負の距離を受け入れない
 */

 use Assert\Assertion;

final class TotalDistanceTraveled
{
    private int $totalDistance = 0;

    public function add(int $distance): TotalDistanceTraveled
    {
        Assertion::greaterOrEqualThan(
            $distance,
            0,
            'You cannot add a negative distance'
        );

        $copy = clone $this;
        $copy->totalDistance += $distance;

        return $copy;
    }
}
