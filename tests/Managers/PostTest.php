<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\PostFaker;
use Railken\Amethyst\Managers\PostManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class PostTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = PostManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = PostFaker::class;
}
