<?php

return [
    'name' => 'Post',
    'description' => 'Post',
    'attributes' => [
        'title' => [
            'label' => 'Title',
            'description' => 'The title of the post'
        ],
        'body' => [
            'label' => 'Body',
            'description' => 'Leave a comment'
        ],
        'postable_type' => [
            'label' => 'Postable Type',
            'description' => 'Data Type witch this post is associated'
        ],
        'postable_id' => [
            'label' => 'Postable ID',
            'description' => 'Data ID witch this post is associated'
        ]
    ]
]