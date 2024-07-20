<?php
/**
 * 例２－３３　Mailerのコンストラクタで代入の順番を変更する
 */

final class Mailer
{
    private Translator $translator;
    private string $defaultSubject;

    public function __construct(Translator $translator)
    {
        $this->defaultSubject = $this->translator
            ->translate('default_subject');

        // ...

        $this->translator = $translator;
    }

    // ...
}
