<?php

return [
    'tracker' => [
        'name'          => 'Project Tracker (WIP)',
        'icon'          => 'fa-tasks',
        'route_segment' => 'tracker',
        'permission'    => 'tracker.view',
        'entries'       => [
            'Show Projects' => [
                'name'          => 'Projects',
                'icon'          => 'fa-project-diagram',
                'route_segment' => 'tracker',
                'route'         => 'tracker.index',
                'permission'    => 'tracker.view',
            ],
        ],
    ],
];
