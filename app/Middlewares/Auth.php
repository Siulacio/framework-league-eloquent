<?php

namespace Application\Middlewares;

use Application\Services\Session;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class Auth
{
    protected $session;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next)
    {
        if (!$this->session->get('user')) {
            return $response
                ->withStatus(302)
                ->withHeader('Location', '/login');
        }

        return $next($request, $response);
    }

}
