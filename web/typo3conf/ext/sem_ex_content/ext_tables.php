<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied');
}


// ========================================
// Add Static TypoScript file configuration
// ========================================
TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript',
    'Content excursions package'
);

// ========================================
// Add PageTS config
// ========================================
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="DIR:EXT:sem_ex_content/Configuration/TsConfig/" extensions="ts">'
);


// ============================================
// Register Headcontent content element
// ============================================

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'Header content',
        'semexcontent_headcontent',
        'EXT:sem_ex_content/Resources/Public/Icons/headcontent.svg'
    ],
    'CType'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_semexcontent_domain_model_headcontent');

$iconRegistry->registerIcon('semexcontent-headcontent', \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class, [
    'source' => 'EXT:sem_ex_content/Resources/Public/Icons/headcontent.svg'
]);



// ============================================
// Register Footcontent content element
// ============================================

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'Footer content',
        'semexcontent_footcontent',
        'EXT:sem_ex_content/Resources/Public/Icons/footcontent.svg'
    ],
    'CType'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_semexcontent_domain_model_footcontent');

$iconRegistry->registerIcon('semexcontent-footcontent', \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class, [
    'source' => 'EXT:sem_ex_content/Resources/Public/Icons/footcontent.svg'
]);

// ============================================
// Register Excursion content element
// ============================================

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'excursions',
        'semexcontent_excursion',
        'EXT:sem_ex_content/Resources/Public/Icons/excursion.svg'
    ],
    'CType'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_semexcontent_domain_model_excursion');

$iconRegistry->registerIcon('semexcontent-excursion', \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class, [
    'source' => 'EXT:sem_ex_content/Resources/Public/Icons/excursion.svg'
]);
