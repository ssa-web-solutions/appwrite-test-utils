<?php

namespace SSAWeb\AppwriteTestUtils;

final class Context {
    public Response $res;
    public Request $req;

    public function __construct(private mixed $context)
    {
        $this->res = new Response($context);
        $this->req = new Request($context);
    }

    public function log(string $message): void
    {
        $this->context->log($message);
    }

    public function error(string $message): void
    {
        $this->context->error($message);
    }
}