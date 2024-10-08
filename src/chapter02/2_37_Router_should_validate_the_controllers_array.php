<?php
/**
 * 例２－３７　Routerはcontrollers配列を検証する必要がある
 */

final class Router
{
    // ...

    public function __construct(array $controllers)
    {
        foreach (array_keys($controllers) as $pattern) {
            if (!is_string($pattern)) {
                throw new InvalidArgumentException(
                    'All URI patterns should be provided as strings'
                );
            }
        }
        foreach ($controllers as $controller) {
            if (!is_string($controller)) {
                throw new InvalidArgumentException(
                    'All controllers should be provided as strings'
                );
            }
        }

        $this->controllers = $controllers;
    }

    // ...
}
