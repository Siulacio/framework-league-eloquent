<?php

namespace Application\Services;

use Application\Interfaces\ViewInterface;
use Psr\Http\Message\ResponseInterface;

class Twig implements ViewInterface
{
    protected $view;
    protected $response;

    public function __construct(ResponseInterface $response)
    {
        $loader = new \Twig_Loader_Filesystem(base_path('app/Views'));
        $view = new \Twig_Environment($loader);
        $this->view = $view;
        $this->response = $response;
    }

    public function render(string $view, array $data = []): ResponseInterface
    {
        $this->response
            ->getBody()
            ->write($this->view->render($view . '.twig', $data));
        return $this->response;
    }

}
