<?php
/**
 * 例２－８　実際の依存関係はEntityManagerではなくUserRepository
 */

final class HomepageController
{
    private UserRepository $userRepository;

    public function __construct(
        UserRepository $userRepository
        /* ... */
    ) {
        $this->userRepository = $userRepository;
        /* ... */
    }

    public function execute(Request $request): Response
    {
        $user = $this->userRepository
            ->getById($request->get('userId'));
        // ...
    }
}
