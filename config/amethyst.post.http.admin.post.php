<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\PostsController::class,
    'router'     => [
        'as'     => 'post.',
        'prefix' => '/posts',
    ],
];
