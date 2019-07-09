<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\PostFaker;
use Amethyst\Managers\PostManager;
use Amethyst\Tests\BaseTest;
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
