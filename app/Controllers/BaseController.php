<?php

namespace Application\Controllers;

use Application\Services\Twig;

class BaseController
{
    protected $view;

    public function __construct(Twig $view)
    {
        $this->view = $view;
    }

}
