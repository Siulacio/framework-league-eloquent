<?php

namespace Application\Interfaces;

use Psr\Http\Message\ResponseInterface;

interface ViewInterface
{
    public function render(string $view, array $data = []): ResponseInterface;

}
