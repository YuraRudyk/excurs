<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

return [
    'ctrl' => [
        'title'                    => 'excursion',
        'label'                    => 'name',
        'tstamp'                   => 'tstamp',
        'crdate'                   => 'crdate',
        'cruser_id'                => 'cruser_id',
        'languageField'            => 'sys_language_uid',
        'transOrigPointerField'    => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'versioningWS'             => true,
        'origUid'                  => 't3_origuid',
        'dividers2tabs'            => true,
        'hideTable'                => true,
        'thumbnail'                => 'image',
        'editlock'                 => 'editlock',
        'delete'                   => 'deleted',
        'enablecolumns'            => [
            'disabled'  => 'hidden',
            'starttime' => 'starttime',
            'endtime'   => 'endtime',
            'fe_group'  => 'fe_group'
        ],
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('sem_ex_content')
            . 'Resources/Public/Icons/excursion.svg',
    ],
    'interface' => [
        'showRecordFieldList' => 'name,price,class,image,image1,image2,image3,ad_info,description,order_ex'
    ],
    'columns' => [
        'sys_language_uid' => [
            'label'  => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type'                => 'select',
                'renderType'          => 'selectSingle',
                'foreign_table'       => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items'               => [
                    ['LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0],
                    ['LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1],
                ]
            ]
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude'     => 1,
            'label'       => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config'      => [
                'type'       => 'select',
                'renderType' => 'selectSingle',
                'items'      => [
                    ['', 0],
                ],
                'foreign_table'       => 'tx_semexcontent_domain_model_excursion',
                'foreign_table_where' => 'AND tx_semexcontent_domain_model_excursion.pid=###CURRENT_PID### '
                    . ' AND tx_semexcontent_domain_model_excursion.sys_language_uid IN (-1,0)',
            ]
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough'
            ]
        ],
        'cruser_id' => [
            'label'  => $ll . 'tx_semexcontent_feature.fields.cruser_id',
            'config' => [
                'type' => 'passthrough'
            ]
        ],
        'pid' => [
            'label'  => $ll . 'fields.pid',
            'config' => [
                'type' => 'passthrough'
            ]
        ],
        'crdate' => [
            'label'  => $ll . 'fields.crdate',
            'config' => [
                'type' => 'passthrough',
            ]
        ],
        'tstamp' => [
            'label'  => $ll . 'fields.tstamp',
            'config' => [
                'type' => 'passthrough',
            ]
        ],
        'starttime' => [
            'exclude'   => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label'     => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel',
            'config'    => [
                'type'    => 'input',
                'size'    => 16,
                'max'     => 20,
                'eval'    => 'datetime',
                'default' => 0,
            ]
        ],
        'endtime' => [
            'exclude'   => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label'     => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel',
            'config'    => [
                'type'    => 'input',
                'size'    => 16,
                'max'     => 20,
                'eval'    => 'datetime',
                'default' => 0,
            ]
        ],
        'fe_group' => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xlf:LGL.fe_group',
            'config'  => [
                'type'       => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'size'       => 5,
                'maxitems'   => 20,
                'items'      => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.hide_at_login',
                        -1,
                    ],
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.any_login',
                        -2,
                    ],
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.usergroups',
                        '--div--',
                    ],
                ],
                'exclusiveKeys'       => '-1,-2',
                'foreign_table'       => 'fe_groups',
                'foreign_table_where' => 'ORDER BY fe_groups.title',
            ],
        ],

        'name' => [
            'label'  => 'Header of excursion',
            'config' => [
                'type' => 'input',
                'eval' => 'trim'
            ]
        ],
        'price' => [
            'label'  => 'Price',
            'config' => [
                'type' => 'input',
                'eval' => 'trim'
            ]
        ],
        'image' => [
            'label'  => 'Main image',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' =>
                            'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
                    ],
                    'foreign_types' => $GLOBALS['TCA']['tt_content']['columns']['image']['config']['foreign_types'],
                    'maxitems'      => 4
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],
        'class' => [
            'label'  => 'Select type',
            'config' => [
                'type'       => 'select',
                'renderType' => 'selectSingle',
                'items'      => [
                    ['bus excursion', 'bus'],
                    ['city excursion', 'lviv'],
                ],
            ],
        ],
        'ad_info' => [
            'defaultExtras' => 'richtext:rte_transform[mode=ts_css]',
            'label'         => 'Additional information',
            'config'        => [
                'type'    => 'text',
                'cols'    => 80,
                'rows'    => 15,
                'eval'    => 'trim',
                'softref' => 'typolink_tag,images,email[subst],url',
            ]
        ],
        'description' => [
            'defaultExtras' => 'richtext:rte_transform[mode=ts_css]',
            'label'         => 'Description of excursion',
            'config'        => [
                'type'    => 'text',
                'cols'    => 80,
                'rows'    => 15,
                'eval'    => 'trim',
                'softref' => 'typolink_tag,images,email[subst],url',
            ]
        ],
        'order_ex' => [
            'label'  => 'Order excursion',
            'config' => [
                'type' => 'input',
                'eval' => 'trim'
            ]
        ],
        'excursion' => [
            'label'  => 'excursion',
            'config' => [
                'type' => 'passthrough'
            ]
        ]
    ],

    'types' => [
        [
            'showitem' => 'name, price, class, image, imag, image2, image3, ad_info, description, order_ex, sys_language_uid, l10n_parent, hidden'
        ]
    ]
    
];
