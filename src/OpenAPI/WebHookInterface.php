<?php

namespace ApiClients\Contracts\OpenAPI;

interface WebHookInterface
{
    /**
     * @param array<string, string> $headers
     * @param array<mixed> $data
     * @return string
     */
    public function resolve(array $headers, array $data) : string;
}
