<?php
declare(strict_types = 1);

require_once __DIR__ .'/vendor/autoload.php';

//use App\Helpers\Config;

//$c = new Config;
//$config = $c->getFileContent('app');

$config = App\Helpers\Config::getFileContent('app');
var_dump($config);


