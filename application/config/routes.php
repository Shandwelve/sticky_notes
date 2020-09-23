<?php

return [
    ''               => [
        'controller' => 'main',
        'action'     => 'index'
    ],
    'add'            => [
        'controller' => 'note',
        'action'     => 'add'
    ],
    'edit\?id=\d+'   => [
        'controller' => 'note',
        'action'     => 'edit'
    ],
    'delete\?id=\d+' => [
        'controller' => 'note',
        'action'     => 'delete'
    ],
    'filterNotes'    => [
        'controller' => 'main',
        'action'     => 'filter'
    ]
];