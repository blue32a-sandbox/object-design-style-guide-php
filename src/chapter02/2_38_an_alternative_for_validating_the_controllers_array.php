<?php
/**
 * 例２－３８　controllers配列を検証するための代替案
 */

final class Router
{
    private array $controllers = [];

    public function __construct(array $controllers)
    {
        foreach ($controllers as $pattern => $controller) {
            $this->addController($pattern, $controller);
        }
    }

    private function addController(
        string $pattern,
        string $controller
    ): void {
        $this->controllers[$pattern] = $controller;
    }

    // ...
}
