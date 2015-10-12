<?php

use Slim\App;
use Slim\Container;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;
use Slim\HttpCache;
use Slim\Csrf;
use Noodlehaus\Config;

session_cache_limiter('nocache');
session_start();

ini_set('display_errors', 'On');

define('PATH_BASE', dirname(__DIR__));

require PATH_BASE . '/vendor/autoload.php';

$container = new Container();

$container['mode_state'] = file_get_contents(PATH_BASE . '/mode.php');

$container['mode'] = function ($container) {
	$file = $container['mode_state'];
	$mode = Config::load(PATH_BASE . "/app/config/{$file}.php");

	return $mode;
};

$container['view'] = function ($c) {
	$view = new Twig(PATH_BASE . '/app/views');

	/*
		---Add caching in production for performance enhancing as a second Twig parameter---
	, [
			'cache' => PATH_BASE . '/app/views/cache'
	]);*/
	$view->addExtension(new TwigExtension(
			$c['router'],
			$c['request']->getUri()
	));
	$view->parserOptions = [
		'debug' => $c->get('mode')['twig']['debug']
	];

	return $view;
};

$container['cache'] = function () {
    return new CacheProvider();
};

$container['csrf'] = function ($c) {
    return new Guard;
};

$container['flash'] = function () {
    return new \Slim\Flash\Messages();
};

$app = new App($container);

require 'dbsetup.php';
require 'routes.php';
