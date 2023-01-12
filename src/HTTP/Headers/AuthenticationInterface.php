<?php

namespace ApiClients\Contracts\HTTP\Headers;

interface AuthenticationInterface
{
    public function authHeader() : string;
}
