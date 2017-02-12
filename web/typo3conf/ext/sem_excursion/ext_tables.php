<?php

if (!defined ('TYPO3_MODE')) die ('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Rudyk.' . $_EXTKEY,
    'pi1',
    'Excursions'
);