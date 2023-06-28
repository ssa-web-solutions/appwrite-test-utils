<?php

namespace SSAWeb\AppwriteTestUtils;

interface Response {
    public function send(string $text, int $status);
    public function json(array $obj, int $status);
}