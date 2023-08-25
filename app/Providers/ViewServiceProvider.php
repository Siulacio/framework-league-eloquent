<?php

namespace Application\Providers;

use Application\Services\View;
use League\Container\ServiceProvider\AbstractServiceProvider;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class ViewServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        View::class
    ];

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function register()
    {
        $this->getContainer()->add(View::class)->withArgument(
            $this->getContainer()->get('response')
        );
    }
}
