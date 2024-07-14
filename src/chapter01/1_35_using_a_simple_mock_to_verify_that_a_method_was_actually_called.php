<?php
/**
 * 例１－３５　単純なモックを使用して、あるメソッドが実際に呼び出されたことを確認する
 */

final class MockMailer implements Mailer
{
    private bool $hasBeenCalled = false;

    public function sendWelcomeEmail(UserId $userId): void
    {
        $this->hasBeenCalled = true;
    }

    public function hasBeenCalled(): bool
    {
        return $this->hasBeenCalled;
    }
}

class Foo
{
    private Mailer $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function someMethod(): void
    {
        $this->mailer->sendWelcomeEmail();
    }
}

use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    /**
     * @test
     */
    public function someMethodHasBeenCalled(): void
    {
        $mockMailer = new MockMailer();
        $foo = new Foo($mockMailer);

        $foo->someMethod();

        $this->assertTrue($mockMailer->hasBeenCalled());
    }
}
