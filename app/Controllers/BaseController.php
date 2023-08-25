<?php

namespace Application\Controllers;

use Application\Interfaces\ViewInterface;

class BaseController
{
    protected $view;

    public function __construct(ViewInterface $view)
    {
        $this->view = $view;
    }

}
