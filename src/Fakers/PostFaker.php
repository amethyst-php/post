<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class PostFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('title', $faker->name);
        $bag->set('body', $faker->text);
        $bag->set('postable_type', 'foo');
        $bag->set('postable', FooFaker::make()->parameters()->toArray());

        return $bag;
    }
}
