<?php

return [
    'table'      => 'amethyst_posts',
    'comment'    => 'Post',
    'model'      => Amethyst\Models\Post::class,
    'schema'     => Amethyst\Schemas\PostSchema::class,
    'repository' => Amethyst\Repositories\PostRepository::class,
    'serializer' => Amethyst\Serializers\PostSerializer::class,
    'validator'  => Amethyst\Validators\PostValidator::class,
    'authorizer' => Amethyst\Authorizers\PostAuthorizer::class,
    'faker'      => Amethyst\Fakers\PostFaker::class,
    'manager'    => Amethyst\Managers\PostManager::class,
    'attributes' => [
        'postable' => [
            'options' => [],
        ],
    ],
];
