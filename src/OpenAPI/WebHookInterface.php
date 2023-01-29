<?php

namespace ApiClients\Contracts\OpenAPI;

interface WebHookInterface
{
    public function resolve(array $data) : string;
}
