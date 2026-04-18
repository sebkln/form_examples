<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Form examples',
    'description' => 'Contains various examples how to use and customize the TYPO3 Form Framework.',
    'category' => 'fe',
    'author' => 'Sebastian Klein',
    'author_email' => 'sebastian@sebkln.de',
    'state' => 'stable',
    'version' => '14.3.0',
    'constraints' => [
        'depends' => [
            'typo3' => '14.2.0-14.3.99',
            'form' => '14.2.0-14.3.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
