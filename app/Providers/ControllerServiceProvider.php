<?php

namespace Application\Providers;

use Application\Controllers\HomeController;
use Application\Controllers\ProfileController;
use Application\Services\Twig;
use League\Container\ServiceProvider\AbstractServiceProvider;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class ControllerServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        HomeController::class,
        ProfileController::class,
    ];

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function register()
    {
        $this->getContainer()->add(HomeController::class)->withArguments([
            $this->getContainer()->get(Twig::class)
        ]);
        $this->getContainer()->add(ProfileController::class)->withArguments([
            $this->getContainer()->get(Twig::class)
        ]);
    }
}
