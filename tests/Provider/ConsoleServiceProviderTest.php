<?php

namespace Sergiors\Silex\Tests\Provider;

use Pimple\Container;
use Symfony\Component\Console\Application as ConsoleApplication;
use Sergiors\Silex\Provider\ConsoleServiceProvider;

class ConsoleServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function register()
    {
        $container = new Container();
        $container->register(new ConsoleServiceProvider());
        
        $this->assertInstanceOf(ConsoleApplication::class, $container['console']);
    }
}
