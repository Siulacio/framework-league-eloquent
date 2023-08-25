<?php

namespace Application\Providers;

use Application\Controllers\HomeController;
use Application\Services\View;
use League\Container\ServiceProvider\AbstractServiceProvider;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class ControllerServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
      HomeController::class
    ];

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function register()
    {
        $this->getContainer()->add(HomeController::class)->withArguments([
            $this->getContainer()->get(View::class)
        ]);
    }
}
