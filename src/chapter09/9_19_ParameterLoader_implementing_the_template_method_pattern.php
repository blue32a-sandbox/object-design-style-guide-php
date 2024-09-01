<?php
/**
 * 例９－１９　テンプレートメソッドパターンを実装したParameterLoader
 */

abstract class ParameterLoader
{
    // ...

    final public function load($filePath): array
    {
        $parameters = [];

        foreach (/* ... */) {
            // ...
            if (/* ... */) {
                $rawParameters = $this->loadFile($filePath);
                // ...
            }
        }

        return $parameters;
    }

    abstract protected function loadFile(string $filePath): array;
}
