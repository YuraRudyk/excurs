<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$EM_CONF[$_EXTKEY] = [
    'title'            => 'Create excursions',
    'description'      => 'description',
    'category'         => 'plugin',
    'shy'              => 0,
    'version'          => '1.0.0',
    'state'            => 'stable',
    'uploadfolder'     => 0,
    'clearCacheOnLoad' => 1,
    'author'           => 'Yura Rudyk',
    'author_company'   => 'Rudyk',
    'constraints'      => [
        'depends' => [
            'typo3'   => '7.0.0-7.6.99',
            'extbase' => '7.0.0-7.6.99',
            'fluid'   => '7.0.0-7.6.99',
        ],
    ]
];
