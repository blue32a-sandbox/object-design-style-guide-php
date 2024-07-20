<?php
/**
 * 例２－２５　ignoreErrors()を呼び出すと、Importerの振る舞いが変化する
 */

final class Importer
{
    private bool $ignoreErrors = true;

    public function ignoreErrors(bool $ignoreErrors): void
    {
        $this->ignoreErrors = $ignoreErrors;
    }

    // ...
}

$importer = new Importer();

// ...

$importer->ignoreErrors(false);

// ...
