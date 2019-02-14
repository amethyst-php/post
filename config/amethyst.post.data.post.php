<?php

return [
    'table'      => 'amethyst_posts',
    'comment'    => 'Post',
    'model'      => Railken\Amethyst\Models\Post::class,
    'schema'     => Railken\Amethyst\Schemas\PostSchema::class,
    'repository' => Railken\Amethyst\Repositories\PostRepository::class,
    'serializer' => Railken\Amethyst\Serializers\PostSerializer::class,
    'validator'  => Railken\Amethyst\Validators\PostValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\PostAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\PostFaker::class,
    'manager'    => Railken\Amethyst\Managers\PostManager::class,
];
