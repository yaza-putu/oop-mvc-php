<?php

$app = new \Core\Application();

$app->newConnection();

$app->run();

return $app;