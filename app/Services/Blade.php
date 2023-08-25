<?php

namespace Application\Services;

use Application\Interfaces\ViewInterface;
use Psr\Http\Message\ResponseInterface;

class Blade implements ViewInterface
{
    protected $view;
    protected $response;

    public function __construct(ResponseInterface $response)
    {
        $this->view = new \Jenssegers\Blade\Blade(base_path('app/Views'), base_path('app/Cache/Views'));
        $this->response = $response;
    }

    public function render(string $view, array $data = []): ResponseInterface
    {
        $this->response
            ->getBody()
            ->write($this->view->render($view, $data));
        return $this->response;
    }
}
