<?php

namespace SSAWeb\AppwriteTestUtils;

abstract class Request {
    public string $bodyRaw;
    public string | object $body;
    public array $headers;
    public string $scheme;
    public string $method;
    public string $url;
    public string $host;
    public string $port;
    public string $path;
    public string $queryString;
    public object $query;
}