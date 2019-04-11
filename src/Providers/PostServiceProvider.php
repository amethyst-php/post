<?php

namespace Railken\Amethyst\Providers;

use Railken\Amethyst\Common\CommonServiceProvider;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class PostServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function boot()
    {
        parent::boot();
  
        \Illuminate\Database\Eloquent\Builder::macro('post', function (): MorphMany {
        	return app('amethyst')->createMacroMorphRelation($this, \Railken\Amethyst\Models\Post::class, 'post', 'postable');
        });
    }
}
