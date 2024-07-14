<?php
/**
 * 例１－３４　テストダブルの使用
 */

interface Mailer
{
    public function sendWelcomeEmail(UserId $userId): void;
}

final class ActualMailer implements Mailer
{
    public function sendWelcomeEmail(UserId $userId): void
    {
        // 実際にメールを送信する
    }
}

final class StandInMailer implements Mailer
{
    public function sendWelcomeEmail(UserId $userId): void
    {
        // 何もしない
    }
}

class Foo
{
    private Mailer $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}

// テスト
$foo = new Foo(new StandInMailer());
