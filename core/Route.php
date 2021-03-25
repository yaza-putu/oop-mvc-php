<?php

namespace Core;

class Route
{
    protected static $routes = [];

    /**
     * Route constructor.
     * @param \App\Core\Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    public static function get($path, $callback)
    {
        static::$routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        // route list
        require_once __DIR__ . '/../routes/web.php';

        $path     = $this->request->getPath();
        $method   = $this->request->getMethod();
        $callback = static::$routes[$method][$path] ?? false;

        if($callback === false)
        {
            echo 'Not Found';
            exit();
        }

        return call_user_func($callback);
    }
}