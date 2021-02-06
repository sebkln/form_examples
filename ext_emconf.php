<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Form examples',
    'description' => 'Contains various examples how to use and customize the TYPO3 Form Framework.',
    'category' => 'fe',
    'author' => 'Sebastian Klein',
    'author_email' => 'sebastian@sebkln.de',
    'state' => 'stable',
    'version' => '8.7.1',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
            'form' => '8.7.0-8.7.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
