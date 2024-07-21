<?php
/**
 * 例３－１７　Userクラス
 */

final class User
{
    private string $emailAddress;

    public function __construct(string $emailAddress)
    {
        if (!is_valid_email_address($emailAddress)) {
            throw new InvalidArgumentException(
                'Invalid email address'
            );
        }
        $this->emailAddress = $emailAddress;
    }

    // ...

    public function changeEmailAddress(string $emailAddress): void
    {
        if (!is_valid_email_address($emailAddress)) {
            throw new InvalidArgumentException(
                'Invalid email address'
            );
        }
        $this->emailAddress = $emailAddress;
    }
}

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * @test
     */
    public function 無効なメールアドレスでUserオブジェクトを作成することはできない(): void
    {
        $this->expectException(
            InvalidArgumentException::class,
            'email'
        );
        new User('not-a-valid-email-address');
    }

    /**
     * @test
     */
    public function 無効なメールアドレスに変更することはできない(): void
    {
        $user = new User('valid@emailaddress.com');

        $this->expectException(
            InvalidArgumentException::class,
            'email'
        );

        $user->changeEmailAddress('not-a-valid-email-address');
    }
}
