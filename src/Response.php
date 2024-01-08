<?php

namespace SSAWeb\AppwriteTestUtils;

class Response {
    public function __construct(private mixed $context)
    {
    }

    public function empty()
    {
        return $this->context->res->empty();
    }
    public function redirect(string $text, int $status)
    {
        return $this->context->res->redirect($text, $status);
    }
    public function send(string $text, int $status)
    {
        return $this->context->res->send($text, $status);
    }
    public function json(array $obj, int $status)
    {
        return $this->context->res->json($obj, $status);
    }
}
