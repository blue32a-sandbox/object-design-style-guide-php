<?php
/**
 * 例９－１１　ChangeUserPasswordサービス
 */

final class ChangeUserPassword
{
    private PasswordEncoder $passwordEncoder;

    public function __construct(
        PasswordEncoder $passwordEncoder,
        /* ... */
    ) {
       // ...
    }

    public function changeUserPassword(
        UserId $userId,
        string $plainTextPassword
    ) {
        $encodedPassword = $this->passwordEncoder->encode(
            $plainTextPassword
        );

        // 新しいパスワードを保存する。
    }
}
