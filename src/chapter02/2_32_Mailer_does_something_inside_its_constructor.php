<?php
/**
 * 例２－３２　Mailerはコンストラクタの内部で何かを行う
 */

final class Mailer
{
    private Translator $translator;
    private string $defaultSubject;

    public function __construct(Translator $translator)
    {
        $this->translator = $translator;

        // ...

        $this->defaultSubject = $this->translator
            ->translate('default_subject');
    }

    // ...
}
