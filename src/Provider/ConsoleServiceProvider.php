<?php

namespace Sergiors\Silex\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Symfony\Component\Console\Application as ConsoleApplication;

class ConsoleServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['console'] = function (Container $app) {
            return new ConsoleApplication($app['console.name'], $app['console.version']);
        };

        $app['console.name'] = 'UNKNOWN';
        $app['console.version'] = 'UNKNOWN';
    }
}
