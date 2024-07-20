<?php
/**
 * 例２－３９　エントリーポイント用のパブリックメソッドと依存関係用のプライベートメソッド
 */

final class ServiceContainer
{
    public function homepageController(): HomepageController
    {
        return new HomepageController(
            $this->userRepository(),
            $this->responseFactory(),
            $this->templateRenderer()
        );
    }

    private function userRepository(): UserRepository
    {
        // ...
    }

    private function responseFactory(): ResponseFactory
    {
        // ...
    }

    private function templateRenderer(): TemplateRenderer
    {
        // ...
    }
}

if ($uri == '/') {
    $controller = $serviceContainer->homepageController();
    $response = $controller->execute($request);
} elseif (/* ... */) {
    // ...
}
