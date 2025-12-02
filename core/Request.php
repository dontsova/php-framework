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

    // i dont use this function
    public function removeQueryString()
    {
        if ($this->uri) {
            $params = explode('&', $this->uri);
            dump($param);
            if (false === \str_contains($params[0], '=')) {
                return trim($params[0], '/');
            }
        }
        return "";
    }
}