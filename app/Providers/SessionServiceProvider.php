<?php

namespace Application\Providers;


use Application\Services\Session;
use League\Container\ServiceProvider\AbstractServiceProvider;

class SessionServiceProvider extends AbstractServiceProvider
{

    protected $provides = [
        Session::class
    ];

    public function register()
    {
        $this->getContainer()->add(Session::class);
    }
}
