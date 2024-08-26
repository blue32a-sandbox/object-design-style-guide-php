<?php
/**
 * 例７－６　Recipientsは重複排除されたメールアドレスのリストを提供できる
 */

final class Recipients
{
    /**
     * @var EmailAddress[]
     */
    private array $emailEmailAddresses;

    /**
     * @return EmailAddress[]
     */
    public function uniqueEmailAddresses(): array
    {
        // 重複を取り除いたメールアドレスのリストを返す
    }
}

final class Mailer
{
    public function sendConfirmationEmail(
        Recipients $recipients
    ): void {
        foreach ($recipients->uniqueEmailAddresses() as $emailAddress) {
            // メールを送信する
        }
    }
}
