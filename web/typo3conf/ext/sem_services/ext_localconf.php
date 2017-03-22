<?php

if (!defined ('TYPO3_MODE')) die ('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Rudyk.' . $_EXTKEY,
    'pi1',
    array(
        'Service' => 'services, create',
    )
);
