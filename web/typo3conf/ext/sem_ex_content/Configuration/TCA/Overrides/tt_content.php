<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

// ============================================
// Columns Definition
// ============================================

$columns = [
    'tx_semexcontent_headcontents' => [
        'label'  => 'header content',
        'config' => [
            'type'           => 'inline',
            'foreign_table'  => 'tx_semexcontent_domain_model_headcontent',
            'foreign_field'  => 'headcontent',
            'foreign_sortby' => 'sorting',
            'appearance'     => [
                'createNewRelationLinkTitle' => 'test',
                'headerThumbnail'            => [
                    'field'  => 'image',
                    'width'  => '45',
                    'height' => '45c',
                ],
                'useSortable'    => true,
                'enableControls' => [
                    'dragdrop' => true,
                    'sort'     => false,
                    'hide'     => true,
                    'delete'   => true,
                    'localize' => false
                ],
                'showPossibleLocalizationRecords' => false,
                'showRemovedLocalizationRecords'  => false,
                'showSynchronizationLink'         => false,
                'showAllLocalizationLink'         => false,
            ],
            'behaviour' => [
                'enableCascadingDelete'                => true,
                'localizationMode'                     => 'select',
                'localizeChildrenAtParentLocalization' => true,
            ]
        ]
    ],

    'tx_semexcontent_footcontents' => [
        'label'  => 'footer content',
        'config' => [
            'type'           => 'inline',
            'foreign_table'  => 'tx_semexcontent_domain_model_footcontent',
            'foreign_field'  => 'footcontent',
            'foreign_sortby' => 'sorting',
            'appearance'     => [
                'createNewRelationLinkTitle' => 'test',
                'headerThumbnail'            => [
                    'field'  => 'image',
                    'width'  => '45',
                    'height' => '45c',
                ],
                'useSortable'    => true,
                'enableControls' => [
                    'dragdrop' => true,
                    'sort'     => false,
                    'hide'     => true,
                    'delete'   => true,
                    'localize' => false
                ],
                'showPossibleLocalizationRecords' => false,
                'showRemovedLocalizationRecords'  => false,
                'showSynchronizationLink'         => false,
                'showAllLocalizationLink'         => false,
            ],
            'behaviour' => [
                'enableCascadingDelete'                => true,
                'localizationMode'                     => 'select',
                'localizeChildrenAtParentLocalization' => true,
            ]
        ]
    ],

    'tx_semexcontent_ordercontents' => [
        'label'  => 'orderer content',
        'config' => [
            'type'           => 'inline',
            'foreign_table'  => 'tx_semexcontent_domain_model_ordercontent',
            'foreign_field'  => 'ordercontent',
            'foreign_sortby' => 'sorting',
            'appearance'     => [
                'createNewRelationLinkTitle' => 'test',
                'headerThumbnail'            => [
                    'field'  => 'image',
                    'width'  => '45',
                    'height' => '45c',
                ],
                'useSortable'    => true,
                'enableControls' => [
                    'dragdrop' => true,
                    'sort'     => false,
                    'hide'     => true,
                    'delete'   => true,
                    'localize' => false
                ],
                'showPossibleLocalizationRecords' => false,
                'showRemovedLocalizationRecords'  => false,
                'showSynchronizationLink'         => false,
                'showAllLocalizationLink'         => false,
            ],
            'behaviour' => [
                'enableCascadingDelete'                => true,
                'localizationMode'                     => 'select',
                'localizeChildrenAtParentLocalization' => true,
            ]
        ]
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $columns);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['semexcontent_headcontent'] = 'semexcontent-headcontent';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['semexcontent_footcontent'] = 'semexcontent-footcontent';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['semexcontent_ordercontent'] = 'semexcontent-ordercontent';


// New type "Headcontent"
$GLOBALS['TCA']['tt_content']['types']['semexcontent_headcontent'] = [
    'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
        tx_semexcontent_headcontents,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
      --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements,tx_gridelements_container,
          tx_gridelements_columns'
];

// New type "Footcontent"
$GLOBALS['TCA']['tt_content']['types']['semexcontent_footcontent'] = [
    'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
        tx_semexcontent_footcontents,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
      --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements,tx_gridelements_container,
          tx_gridelements_columns'
];

// New type "Ordercontent"
$GLOBALS['TCA']['tt_content']['types']['semexcontent_ordercontent'] = [
    'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
        tx_semexcontent_ordercontents,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
      --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements,tx_gridelements_container,
          tx_gridelements_columns'
];
