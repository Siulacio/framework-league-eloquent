<?php

namespace Application\Providers;

use Application\Services\Blade;
use Application\Services\Twig;
use League\Container\ServiceProvider\AbstractServiceProvider;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class ViewServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        Twig::class,
        Blade::class,
    ];

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function register()
    {
        $this->getContainer()->add(Twig::class)->withArgument(
            $this->getContainer()->get('response')
        );
        $this->getContainer()->add(Blade::class)->withArgument(
            $this->getContainer()->get('response')
        );
    }
}
