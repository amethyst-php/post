<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\PostsController::class,
    'router'     => [
        'as'     => 'post.',
        'prefix' => '/posts',
    ],
];
