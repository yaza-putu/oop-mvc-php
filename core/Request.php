<?php

namespace Core;

use Illuminate\Support\Facades\URL;

class Request
{
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';

        // cek position public path
        $public = strpos($path, 'public/');

        // get path after public/
        if($public)
        {
            $path = substr($path, $public+6);
        }

        // cek ? param
        $position = strpos($path, '?');

        if ($position === false) {
            return $path;
        }

        return substr($path, 0, $position);
    }

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}