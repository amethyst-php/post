<?php

return [
    'name' => 'Commento',
    'description' => 'Commento',
    'attributes' => [
        'title' => [
            'label' => 'Titolo',
            'description' => 'Il titolo del commento'
        ],
        'body' => [
            'label' => 'Contenuto',
            'description' => 'Il contenuto principale del commento'
        ],
        'postable_type' => [
            'label' => 'Tipologia Commentabile',
            'description' => 'Il tipo di dato con qui è collegato'
        ],
        'postable_id' => [
            'label' => 'ID Commentabile',
            'description' => 'L\'ID del dato con cui è collegato'
        ]
    ]
];