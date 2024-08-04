<?php
/**
 * 例６－２１　コントローラは、コマンド部分とクエリ部分に分けることができる
 */

final class RegisterUserController
{
    private UserRepository $userRepository;
    private RegisterUser $registerUser;
    private UserReadModelRepository $userReadModelRepository;

    public function __construct(
        UserRepository $userRepository,
        RegisterUser $registerUser,
        UserReadModelRepository $userReadModelRepository
    ) {
        $this->userRepository = $userRepository;
        $this->registerUser = $registerUser;
        $this->userReadModelRepository = $userReadModelRepository;
    }

    public function execute(Request $request): Response
    {
        $userId = $this->userRepository->nextIdentifier();

        $this->registerUser
            ->register($userId, $request->get('username'));

        $newUser = $this->userReadModelRepository->getById($userId);

        return new Response(200, json_encode($newUser));
    }
}
