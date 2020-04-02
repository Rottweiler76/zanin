<?php

use Symfony\Component\HttpFoundation\Request;
use Zanin\SimpleRouter;

$loader = require __DIR__ . '/../vendor/autoload.php';

$request = Request::createFromGlobals();

$response = SimpleRouter::route($request);
$response->send();

