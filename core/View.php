<?php

namespace Core;
use Jenssegers\Blade\Blade as CoreBlade;

class View
{
    public static function render($template, $data = [])
    {
        $views = __DIR__ . '/../resources/views';
        $cache = __DIR__ . '/../storage/views/cache';

        $blade = new CoreBlade($views, $cache);

        $fileLocation = $views . '/' . $template . '.blade.php';

        if(file_exists($fileLocation))
        {
            echo $blade->render($template, $data);
        } else {
            echo 'File Not Found';
        }
    }
}