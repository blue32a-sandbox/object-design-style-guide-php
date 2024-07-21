<?php
/**
 * 例３－１２　Lineは異なる方法で線分を作成する方法を提供
 */

final class Line
{
    private bool $isDooted;
    private int $distanceBetweenDots;

    public static function dotted(int $distanceBetweenDots): Line
    {
        if ($distanceBetweenDots <= 0) {
            throw new InvalidArgumentException(
                'Expect the distance between dots to be positive.'
            );
        }
        $line = new Line(/* ... */);
        $line->distanceBetweenDots = $distanceBetweenDots;
        $line->isDooted = true;

        return $line;
    }

    public static function solid(): Line
    {
        $line = new Line();

        $line->isDooted = false;

        return $line;
    }
}
