<?php
/**
 * 例７－７　より効果的なRecipientsの実装
 */

final class Recipients
{
    /**
     * @var EmailAddress[]
     */
    private array $emailAddresses;

    private function __construct(array $emailAddresses)
    {
        $this->emailAddresses = $emailAddresses;
    }

    public static function emptyList(): Recipients
    {
        return new Recipients([]);
    }

    public function with(EmailAddress $emailAddress): Recipients
    {
        if (in_array($emailAddress, $this->emailAddresses)) {
            return $this;
        }

        return new Recipients(
            array_merge($this->emailAddresses, [$emailAddress])
        );
    }

    public function emailAddresses(): array
    {
        return $this->emailAddresses;
    }
}
