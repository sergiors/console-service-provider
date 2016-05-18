<?php

namespace Sergiors\Silex\Tests\Provider;

use Silex\Application;
use Silex\WebTestCase;
use Symfony\Component\Console\Application as ConsoleApplication;
use Sergiors\Silex\Provider\ConsoleServiceProvider;

class ConsoleServiceProviderTest extends WebTestCase
{
    /**
     * @test
     */
    public function register()
    {
        $app = $this->createApplication();
        $app->register(new ConsoleServiceProvider());
        $this->assertInstanceOf(ConsoleApplication::class, $app['console']);
    }

    public function createApplication()
    {
        $app = new Application();
        $app['debug'] = true;

        return $app;
    }
}
