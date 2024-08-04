<?php
/**
 * 例６－２０　コントローラは常に何かを返す
 */

final class RegisterUserController
{
    private RegisterUser $registerUser;

    public function __construct(
        RegisterUser $registerUser
    ) {
        $this->registerUser = $registerUser;
    }

    public function execute(Request $request): Response
    {
        $newUser = $this->registerUser
            ->register($request->get('username'));

        return new Response(200, json_encode($newUser));
    }
}
