<?php
/**
 * 例９－１７　前に見たものとは異なるParameterLoader
 */

class ParameterLoader
{
    public function load($filePath): array
    {
        // ...

        $rawParameters = $this->loadFile($filePath);

        // ...

        return $parameters;
    }

    protected function loadFIle($filePath): array
    {
        return json_decode(
            file_get_contents($filePath),
            true
        );
    }
}
