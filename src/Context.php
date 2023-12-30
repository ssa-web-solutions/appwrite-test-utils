<?php

namespace SSAWeb\AppwriteTestUtils;

abstract class Context {
    public Response $res;
    public Request $req;
    public abstract function log(string $message): void;
    public abstract function error(string $message): void;
}