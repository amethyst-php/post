<?php

namespace Railken\Amethyst\Providers;

use Railken\Amethyst\Common\CommonServiceProvider;

class PostServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function boot()
    {
        parent::boot();

        app('amethyst')->createMorphRelation(\Railken\Amethyst\Models\Post::class, 'post', 'postable', 'morphMany');
    }
}
