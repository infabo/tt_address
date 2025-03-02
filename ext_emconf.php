<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Address List',
    'description' => 'Displays a list of addresses from an address table on the page.',
    'category' => 'plugin',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'author' => 'tt_address Development Team',
    'author_email' => 'friendsof@typo3.org',
    'version' => '8.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-12.4.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
    'autoload' => [
        'psr-4' => ['FriendsOfTYPO3\\TtAddress\\' => 'Classes']
    ],
    'autoload-dev' =>
        [
            'psr-4' => ['FriendsOfTYPO3\\TtAddress\\Tests\\' => 'Tests']
        ],
];
