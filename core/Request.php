<?php

namespace PHPFramework;

class Request
{
    public string $uri;

    /**
     * @return string
     */
    public function __construct(string $uri)
    {
        $this->uri = trim(urldecode($uri), '/');
    }

    public function getPath(): string
    {
        return $this->uri;
    }

    public function getMethod(): string
    {
        return strtoupper($_SERVER['REQUEST_METHOD']);
    }

    public function get($name, $default = null): ?string
    {
        return $_GET[$name] ?? $default;
    }
}