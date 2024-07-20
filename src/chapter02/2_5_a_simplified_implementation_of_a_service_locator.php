<?php
/**
 * 例２－５　簡易なサービスロケータの実装
 */

final class ServiceLocator
{
    private static $services = [];

    public function __construct()
    {
        $this->service = [
            'logger' => new FileLogger(/* ... */),
            ];
    }

    public function get(string $identifier): object
    {
        if (!isset($this->services[$identifier])) {
            throw new LogicException(
                'Unknown service: ' . $identifier
            );
        }
    }
}
