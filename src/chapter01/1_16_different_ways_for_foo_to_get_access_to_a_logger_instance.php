<?php
/**
 * 例１－１６　FooがLoggerインスタンスにアクセスするためのさまざまな方法
 */

class Foo1
{
    public function someMethod(): void
    {
        $logger = new Logger();
        $logger->debug('...');
    }
}

class Foo2
{
    public function someMethod(): void
    {
        $logger = ServiceLocator::getLogger();
        $logger->debug('...');
    }
}

class Foo3
{
    private Logger $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function someMethod(): void
    {
        $this->logger->debug('...');
    }
}
