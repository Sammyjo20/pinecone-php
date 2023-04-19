<?php

namespace Probots\Pinecone;


final class Pinecone
{
    /**
     * Creates a new Open AI Client with the given API token.
     */
    public static function client(string $apiKey, string $environment = null): Client
    {
        return self::factory()
            ->withApiKey($apiKey)
            ->withEnvironment($environment)
            ->make();
    }

    /**
     * Creates a new factory instance to configure a custom Open AI Client
     */
    public static function factory(): Factory
    {
        return new Factory();
    }
}