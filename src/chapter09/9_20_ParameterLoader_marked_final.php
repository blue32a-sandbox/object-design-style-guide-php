<?php
/**
 * 例９－２０　finalにしたParameterLoader
 */

final class ParameterLoader
{
    private FileLoader $fileLoader;

    public function __construct(FileLoader $fileLoader)
    {
        $this->fileLoader = $fileLoader;
    }

    final public function load($filePath): array
    {
        $parameters = [];

        foreach (/* ... */) {
            // ...
            if (/* ... */) {
                $rawParameters = $this->fileLoader->load(
                    $filePath
                );

                // ...
            }
        }

        return $parameters;
    }
}
