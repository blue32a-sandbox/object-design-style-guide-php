<?php
/**
 * 例３－１８　EmailAddressクラス
 */

final class EmailAddress
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
}

final class User
{
    private EmailAddress $emailAddress;

    public function __construct(EmailAddress $emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    public function changeEmailAddress(EmailAddress $emailAddress): void
    {
        $this->emailAddress = $emailAddress;
    }
}
