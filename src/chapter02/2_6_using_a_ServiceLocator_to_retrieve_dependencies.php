<?php
/**
 * 例２－６　ServiceLocatorを使って依存性を取得する
 */

final class HomepageController
{
    private ServiceLocator $locator;

    public function __construct(ServiceLocator $locator)
    {
        $this->locator = $locator;
    }

    public function execute(Request $request): Response
    {
        $user = $this->locator->get(EntityManager::class)
            ->getRepository(User::class)
            ->getById($request->get('userId'));

        return $this->locator->get(ResponseFactory::class)
            ->create()
            ->withContent(
                $this->locator->get(TemplateRendor::class)
                    ->render(
                        'homgepage.html.twig',
                        [
                            'user' => $user,
                        ]
                        ),
                'text/html'
            );
    }
}
