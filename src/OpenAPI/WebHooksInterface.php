<?php

namespace ApiClients\Contracts\OpenAPI;

interface WebHooksInterface extends WebHookInterface
{
    /**
     * @template H
     * @param class-string<H> $className
     * @return H
     */
    public function hydrateWebHook(string $className, array $data) : object;

    /**
     * @return array{className: class-string, data: mixed}
     */
    public function serializeWebHook(object $object) : array;
}
