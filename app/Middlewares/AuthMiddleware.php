<?php

namespace App\Middlewares;

use Inspira\Http\Middlewares\Middleware;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class AuthMiddleware extends Middleware
{
	public bool $global = false;

	public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
	{
		// TODO: Do something with the request object to validate authorization

		return $handler->handle($request);
	}
}
