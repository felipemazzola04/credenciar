<?php

namespace ContainerXPyyyEj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_C9BdPTSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.c9BdPTS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.c9BdPTS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'request' => ['privates', '.errored..service_locator.c9BdPTS.symfony\\Component\\HttpFoundation\\Request', NULL, 'Cannot autowire service ".service_locator.c9BdPTS": it references class "symfony\\Component\\HttpFoundation\\Request" but no such service exists.'],
        ], [
            'request' => 'symfony\\Component\\HttpFoundation\\Request',
        ]);
    }
}
