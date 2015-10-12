<?php

return [
	'app' => [
		'url' => 'http://slim3.app:8000', // change your url accordingly.
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
		'username' => 'add email',
		'password' => 'add password',
		'port' => 587,
		'html' => true
	],

	'twig' => [
		'debug' => false
	],
	
	'csrf' => [
		'key' => 'csrf_token'
	]
];