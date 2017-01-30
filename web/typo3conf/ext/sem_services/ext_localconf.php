<?php

if (!defined ('TYPO3_MODE')) die ('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Media711.' . $_EXTKEY,
    'pi1',
    array('Service' => 'services')
);
