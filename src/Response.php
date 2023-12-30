<?php

namespace SSAWeb\AppwriteTestUtils;

interface Response {
    public function empty(): void;
    public function redirect(string $text, int $status): void;
    public function send(string $text, int $status): void;
    public function json(array $obj, int $status): void;
}