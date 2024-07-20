<?php
/**
 * 例２－７　実際の依存関係をコンストラクタ引数として注入する
 */

final class HomepageController
{
    private EntityManager $entityManager;
    private ResponseFactory $responseFactory;
    private TemplateRenderer $templateRenderer;

    public function __construct(
        EntityManager $entityManager,
        ResponseFactory $responseFactory,
        TemplateRenderer $templateRenderer
    ) {
        $this->entityManager = $entityManager;
        $this->responseFactory = $responseFactory;
        $this->templateRenderer = $templateRenderer;
    }

    public function execute(Request $request): Response
    {
        $user = $this->entityManager->getRepository(User::class)
            ->getById($request->get('userId'));

        return $this->responseFactory
            ->create()
            ->withContent(
                $this->templateRenderer
                    ->render(
                        'homepage.html.twig',
                        [
                            'user' => $user,
                        ]
                    ),
                'text/html'
            );
    }
}
