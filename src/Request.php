<?php

namespace SSAWeb\AppwriteTestUtils;

class Request {
    public string $bodyRaw;
    public string | array $body;
    public array $headers;
    public string $scheme;
    public string $method;
    public string $url;
    public string $host;
    public string $port;
    public string $path;
    public string $queryString;
    public array $query;

    public function __construct(private mixed $context)
    {
        $this->bodyRaw = $context->req->bodyRaw;
        $this->body = $context->req->body;
        $this->headers = $context->req->headers;
        $this->scheme = $context->req->scheme;
        $this->method = $context->req->method;
        $this->url = $context->req->url;
        $this->host = $context->req->host;
        $this->port = $context->req->port;
        $this->path = $context->req->path;
        $this->queryString = $context->req->queryString;
        $this->query = $context->req->query;
    }
}