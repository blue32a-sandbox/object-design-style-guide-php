<?php
/**
 * 例７－５　受け取り済みユーザーのリストを保持するMailerサービス
 */

final class Mailer
{
    private array $sentTo = [];

    // ...

    public function sendConfirmationEmail(
        EmailAddress $recipient
    ): void {
        if (in_array($recipient, $this->sentTo)) {
            // メールを再送信しない
            return;
        }

        // ここでメールを送信

        $this->sentTo[] = $recipient;
    }
}

$mailer = new Mailer(/* ... */);
$recipient = new EmailAddress.fromString('info@matthiasnoback.nl');

$mailer->sendConfirmationEmail($recipient); // 確認メールが送信される

$mailer->sendConfirmationEmail($recipient); // ２回目の呼び出しでは、メールは送信されない
