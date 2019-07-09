<?php

namespace Amethyst\Tests;

abstract class BaseTest extends \Orchestra\Testbench\TestCase
{
    /**
     * Setup the test environment.
     */
    public function setUp(): void
    {
        parent::setUp();

        app('amethyst')->pushMorphRelation('post', 'postable', 'foo');

        $this->artisan('migrate:fresh');
    }

    protected function getPackageProviders($app)
    {
        return [
            \Amethyst\Providers\PostServiceProvider::class,
            \Amethyst\Providers\FooServiceProvider::class,
        ];
    }
}
