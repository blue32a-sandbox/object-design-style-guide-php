<?php
/**
 * 例２－３　ユーザ名とパスワードに別々のコンストラクタ引数を使う
 */

final class ApiClient
{
    private string $username;
    private string $password;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }
}
