<?php

require_once __DIR__ . '/../autoload.php';

/**
$config = new \App\Config();
echo $config->data['db']['host'];
*/
/**
$config = \App\Config::getInstance();
echo $config->data['db']['host'];
*/
/**
$author = \App\Model\Article::findAll();
var_dump($author[0]->author);
*/

//$general = \App\Model\Rang::getSort('DESC');

$general = \App\Model\General::findBySort('id DESC');
var_dump($general);




