<?php

namespace Core;

use Dotenv\Dotenv;

class Env
{
    public function __construct()
    {
        $dotenv = Dotenv::createImmutable(__DIR__.'/../');
        $dotenv->load();
    }
}