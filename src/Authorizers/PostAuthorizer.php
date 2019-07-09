<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class PostAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'post.create',
        Tokens::PERMISSION_UPDATE => 'post.update',
        Tokens::PERMISSION_SHOW   => 'post.show',
        Tokens::PERMISSION_REMOVE => 'post.remove',
    ];
}
