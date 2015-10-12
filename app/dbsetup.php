<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
	'driver' => $container->get('mode')['db']['driver'],
	'host' => $container->get('mode')['db']['host'],
	'database' => $container->get('mode')['db']['name'],
	'username' => $container->get('mode')['db']['username'],
	'password' => $container->get('mode')['db']['password'],
	'charset' => $container->get('mode')['db']['charset'],
	'collation' => $container->get('mode')['db']['collation'],
	'prefix' => $container->get('mode')['db']['prefix']
]);

$capsule->bootEloquent();