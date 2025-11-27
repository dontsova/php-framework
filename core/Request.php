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
}