<?php
/**
 * 例２－１６　JsonEncoderによってjson_encode()への呼び出しをラップする
 */

// 変更前：
final class ResponseFactory
{
    public function createApiResponse(array $data): Response
    {
        return new Response(
            json_encode($data, JSON_THROW_ON_ERROR | JSON_FORCE_OBJECT),
            [
                'Content-Type' => 'application/json',
            ]
        );
    }
}

// 変更後：
final class JsonEncoder
{
    /**
     * @throws RuntimeException
     */
    public function encode(array $data): string
    {
        try {
            return json_encode(
                $data,
                JSON_THROW_ON_ERROR | JSON_FORCE_OBJECT
            );
        } catch (RuntimeException $previous) {
            throw new RuntimeException(
                'Failed to encode data: ' . var_Export($data, true),
                0,
                $previous
            );
        }
    }
}
final class ResponseFactory
{
    private JsonEncoder $jsonEncoder;

    public function __construct(JsonEncoder $jsonEncoder)
    {
        $this->jsonEncoder = $jsonEncoder;
    }

    public function createApiResponse($data): Response
    {
        return new Response(
            $this->jsonEncoder->encode($data),
            [
                'Content-Type' => 'application/json',
            ]
        );
    }
}
