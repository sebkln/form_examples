<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Form examples',
    'description' => 'Contains various examples how to use and customize the TYPO3 Form Framework.',
    'category' => 'fe',
    'author' => 'Sebastian Klein',
    'author_email' => 'sebastian@sebkln.de',
    'state' => 'stable',
    'version' => '12.4.1',
    'constraints' => [
        'depends' => [
            'typo3' => '12.0.0-12.4.99',
            'form' => '12.0.0-12.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
