<?php

namespace Core;

use Core\Database;

class Application
{
    public function __construct()
    {
        $this->request = new Request();
        $this->route = new Route($this->request);
        $this->env = new Env();
    }

    public function run()
    {
        $this->route->resolve();
    }

    public function newConnection()
    {
        new Database();
    }

}