<?php

namespace PHPFramework;

class Application
{

    public string $uri;
    public Request $request;
    public Response $response;
    public Router $router;

    public function __construct()
    {
        $this->uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); 
        $this->request = new Request($this->uri);
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run(): void
    {
        echo $this->router->dispatch();
    }

}