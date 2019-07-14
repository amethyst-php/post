<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Post                 newEntity()
 * @method \Amethyst\Schemas\PostSchema          getSchema()
 * @method \Amethyst\Repositories\PostRepository getRepository()
 * @method \Amethyst\Serializers\PostSerializer  getSerializer()
 * @method \Amethyst\Validators\PostValidator    getValidator()
 * @method \Amethyst\Authorizers\PostAuthorizer  getAuthorizer()
 */
class PostManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.post.data.post';
}
