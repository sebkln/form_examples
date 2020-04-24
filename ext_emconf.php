<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Form examples',
    'description' => 'Contains various examples how to use and customize the Form Framework introduced in TYPO3 v8.',
    'category' => 'fe',
    'author' => 'Sebastian Klein',
    'author_email' => 'sebastian@sebkln.de',
    'state' => 'stable',
    'version' => '8.7.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
            'form' => '8.7.0-8.7.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
