<?php

namespace Application\Controllers;

use Application\Services\View;

class BaseController
{
    protected $view;

    public function __construct(View $view)
    {
        $this->view = $view;
    }

}
