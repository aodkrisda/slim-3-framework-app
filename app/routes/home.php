<?php

$app->get('/', function ($req, $res, $args) {
	return $this->view->render($res, 'home.php');
})->setName('home');
