<?php
/**
 * 例２－３６　Routerは例外を投げない
 */

final class Router
{
    private array $controllers;
    private string $notFoundController;

    public function __construct(
        array $controllers,
        string $notFoundController
    ) {
        $this->controllers = $controllers;
        $this->notFoundController = $notFoundController;
    }

    public function match(string $uri): string
    {
        foreach ($this->controllers as $pattern => $controller) {
            if ($this->matches($uri, $pattern)) {
                return $controller;
            }
        }
    }

    private function matches(string $uri, string $pattern): bool
    {
        // ...
    }
}

$router = new Router(
    [
        '/' => 'homepage_controller',
    ],
    'not-found'
);
$router->match('/');
