<?php

return [
    'seattracker' => [
        'name'          => ' SeAT Tracker',
        'icon'          => 'fa-tasks',
        'route_segmant' => 'seattracker',
        'permission'    => 'seattracker.view',
        'entries' => [
            'name'          => 'Projects',
            'icon'          => 'fa-project-diagram',
            'route'         => 'seattracker.index',
            'permission'    => 'seattracker.view',
        ],
    ],
];
