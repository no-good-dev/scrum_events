<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

define('DATA_DIR_MEETING', 'data/Events/');
define('DATA_DIR_CUSTOMERS', 'data/Customers/');

return[
    'date_format' => "l d F Y",
    'customer_name' => 'Customer X',
    'team_name' => 'Demo Team',
    'style' => 'css/style.css',
    'index.md' => [
        'template' => 'main.php',
        'title' => 'Scrum Events',
        'name' => 'Scrum Events',
        'duration' => 15,
        'time_boxed' => true,
        'background_image' => 'img/index.jpg',
    ],
    'break.md' => [
        'template' => 'break.php',
        'title' => 'Break',
        'name' => 'Break',
        'duration' => 10,
        'time_boxed' => true,
        'background_image' => 'img/break.jpg',
    ],
    'daily_scrum.md' => [
        'template' => 'meeting.php',
        'title' => str_replace('#', '', file(DATA_DIR_MEETING.'daily_scrum.md')[0]),
        'name' => str_replace('#', '', file(DATA_DIR_MEETING.'daily_scrum.md')[0]),
        'objective' => str_replace('#', '', file(DATA_DIR_MEETING.'daily_scrum.md')[1]),
        'audience' => str_replace('#', '', file(DATA_DIR_MEETING.'daily_scrum.md')[2]),
        'output' => (file(DATA_DIR_MEETING.'daily_scrum.md')[3]?str_replace('#', '', file(DATA_DIR_MEETING.'daily_scrum.md')[3]):'<br>'),
        'location' => 'Online',
        'schedule' => 'Täglich um 10:00',
        'duration' => 15,
        'time_boxed' => true,
        'background_image' => 'img/dailyScrum.jpg',
    ],
    'sprint_planning.md' => [
        'template' => 'meeting.php',
        'title' => str_replace('#', '', file(DATA_DIR_MEETING.'sprint_planning.md')[0]),
        'name' => str_replace('#', '', file(DATA_DIR_MEETING.'sprint_planning.md')[0]),
        'objective' => str_replace('#', '', file(DATA_DIR_MEETING.'sprint_planning.md')[1]),
        'audience' => str_replace('#', '', file(DATA_DIR_MEETING.'sprint_planning.md')[2]),
        'output' => (file(DATA_DIR_MEETING.'sprint_planning.md')[3]?str_replace('#', '', file(DATA_DIR_MEETING.'sprint_planning.md')[3]):'<br>'),
        'location' => 'Online',
        'schedule' => 'Three days before Sprint start',
        'duration' => 480,
        'time_boxed' => true,
        'background_image' => 'img/sprintplanning.jpg',
    ],
    'sprint_retrospective.md' => [
        'template' => 'meeting.php',
        'title' => str_replace('#', '', file(DATA_DIR_MEETING.'sprint_retrospective.md')[0]),
        'name' => str_replace('#', '', file(DATA_DIR_MEETING.'sprint_retrospective.md')[0]),
        'objective' => str_replace('#', '', file(DATA_DIR_MEETING.'sprint_retrospective.md')[1]),
        'audience' => str_replace('#', '', file(DATA_DIR_MEETING.'sprint_retrospective.md')[2]),
        'output' => (file(DATA_DIR_MEETING.'sprint_retrospective.md')[3]?str_replace('#', '', file(DATA_DIR_MEETING.'sprint_retrospective.md')[3]):'<br>'),
        'location' => 'Online',
        'schedule' => 'One day before Sprint ends',
        'duration' => 180,
        'time_boxed' => true,
        'height_fix' => 74,
        'background_image' => 'img/sprintretrospective.jpg',
    ],
    'sprint_review.md' => [
        'template' => 'meeting.php',
        'title' => str_replace('#', '', file(DATA_DIR_MEETING.'sprint_review.md')[0]),
        'name' => str_replace('#', '', file(DATA_DIR_MEETING.'sprint_review.md')[0]),
        'objective' => str_replace('#', '', file(DATA_DIR_MEETING.'sprint_review.md')[1]),
        'audience' => str_replace('#', '', file(DATA_DIR_MEETING.'sprint_review.md')[2]),
        'output' => (file(DATA_DIR_MEETING.'sprint_review.md')[3]?str_replace('#', '', file(DATA_DIR_MEETING.'sprint_review.md')[3]):'<br>'),
        'location' => 'Online',
        'schedule' => 'Last day of Sprint',
        'duration' => 74,
        'time_boxed' => true,
        'background_image' => 'img/sprintreview.jpg',
    ],
    'working_agreements.md' => [
        'template' => 'definition.php',
        'title' => 'Working Agreements',
        'name' => 'Working Agreements',
        'background_image' => 'img/wa.jpg',
        'items' => [
            0 => 'Neque porro quisquam est qui dolorem.',
            1 => 'Neque porro quisquam est qui dolorem.',
            2 => 'Neque porro quisquam est qui dolorem.',
            3 => 'Neque porro quisquam est qui dolorem.',
            4 => 'Neque porro quisquam est qui dolorem.',
        ]
    ],
    'definition_of_done.md' => [
        'template' => 'definition.php',
        'title' => 'Definition of Done',
        'name' => 'Definition of Done',
        'background_image' => 'img/dod.jpg',
        'items' => [
            0 => 'Neque porro quisquam est qui dolorem.',
            1 => 'Neque porro quisquam est qui dolorem.',
            2 => 'Neque porro quisquam est qui dolorem.',
            3 => 'Neque porro quisquam est qui dolorem.',
            4 => 'Neque porro quisquam est qui dolorem.',
        ]
    ],
    'definition_of_ready.md' => [
        'template' => 'definition.php',
        'title' => 'Definition of Ready',
        'name' => 'Definition of Ready',
        'background_image' => 'img/dor.jpg',
        'items' => [
            0 => 'Neque porro quisquam est qui dolorem.',
            1 => 'Neque porro quisquam est qui dolorem.',
            2 => 'Neque porro quisquam est qui dolorem.',
            3 => 'Neque porro quisquam est qui dolorem.',
            4 => 'Neque porro quisquam est qui dolorem.',
        ]
    ],
];
