<?php

$app->get('/contact', function ($req, $res, $args) {
	return $this->view->render($res, 'contact.php');
})->setName('contact');