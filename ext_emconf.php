<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Form examples',
    'description' => 'Contains various examples how to use and customize the TYPO3 Form Framework.',
    'category' => 'fe',
    'author' => 'Sebastian Klein',
    'author_email' => 'sebastian@sebkln.de',
    'state' => 'stable',
    'version' => '10.4.4',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'form' => '10.4.0-10.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
