<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Inspira\Framework\Application;
use Inspira\Framework\Pipeline;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

try {
	$app = new Application();
	$app->setBasePath(dirname(__DIR__))
		->boot()
		->start();

	$handler = $app->make(RequestHandlerInterface::class);
	$request = $app->make(ServerRequestInterface::class);
	$response = ($app->make(Pipeline::class))->process($request, $handler);
} catch (Throwable $exception) {
	$debug = filter_var($_ENV['APP_DEBUG'] ?? false, FILTER_VALIDATE_BOOL);
	if ($debug === false) {
		http_response_code(500);
		exit(0);
	}

	throw $exception;
}

$handler->send($response);
