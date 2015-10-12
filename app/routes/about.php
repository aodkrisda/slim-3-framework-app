<?php

$app->get('/about', function ($req, $res, $args) {
	return $this->view->render($res, 'about.php');
})->setName('about');