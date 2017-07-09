<?php

/**
 * web/index.php
 * Author: samimetoui@gmail.com
 */

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;

require __DIR__.'/../app/routes.php';

$app->run();
