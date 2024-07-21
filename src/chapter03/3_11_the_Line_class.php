<?php
/**
 * 例３－１１　Lineクラス
 */

final class Line
{
    public function __construct(
        bool $isDooted,
        int $distanceBetweenDots
    ) {
        if ($isDooted && $distanceBetweenDots <= 0) {
            throw new InvalidArgumentException(
                'Expect the distance between dots to be positive.'
            );
        }

        // ...
    }
}
