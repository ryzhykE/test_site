<?php

require_once __DIR__ . '/autoload.php';

use App\Router;

$rout = new Router();

try {
    $rout->run();
}catch (\App\Exceptions\DbException $e) {
    \App\Logger::getInstance()->log($e);
    $view = new \App\View();
    $view->error = $e->getMessage();
    $view->displayTwig('error.php');
}catch (\App\Exceptions\BaseException $e) {
    \App\Logger::getInstance()->log($e);
    $view = new \App\View();
    $view->error = $e->getMessage();
    $view->displayTwig('error.php');
}








