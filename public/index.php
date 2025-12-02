<?php

if (PHP_MAJOR_VERSION < 8) {
    die("Require PHP version >= 8");
}

require_once __DIR__ . '/../config/init.php';
require_once ROOT . '/vendor/autoload.php';

$app = new \PHPFramework\Application();
require_once CONFIG . '/routes.php';

// dump($app->request->get('s2', 'abc'));

$app->run();
