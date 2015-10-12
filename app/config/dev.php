<?php

return [
	'app' => [
		'url' => 'http://slim3.app:8000',
		'hash' => [
			'algo' => 'PASSWORD_BCRYPT',
			'cost' => 8
		]
	],

	'db' => [
		'driver' => 'mysql',
		'host' => '127.0.0.1',
		'name' => 'slim3',
		'username' => 'homestead',
		'password' => 'secret',
		'charset' => 'utf8',
		'collation' => 'utf8_unicode_ci',
		'prefix' => ''
	],

	'auth' => [
		'session' => 'user_id',
		'remember' => 'user_r'
	],

	'mail' => [
		'smtp_auth' => true,
		'smtp_secure' => 'tls',
		'host' => 'smtp.gmail.com',
		'username' => 'vladaj00@gmail.com',
		'password' => 'kakavbagalobre44',
		'port' => 587,
		'html' => true
	],

	'twig' => [
		'debug' => true
	],
	
	'csrf' => [
		'key' => 'csrf_token'
	]
];