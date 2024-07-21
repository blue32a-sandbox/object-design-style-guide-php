<?php
/**
 * 例３－３　Coordinatesクラス
 */

final class Coordinates
{
    private float $latitude;
    private float $longitude;

    public function __construct(float $latitude, float $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    // ...
}

$meaningfulCoordinates = new Coordinates(45.0, -60.0);
$offThePlanet = new Coordinates(1000.0, -20000.0);
