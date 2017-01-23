<?php
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl'] = [
    '_DEFAULT' => [
        'init' => [
            'enableCHashCache'     => true,
            'appendMissingSlash'   => 'ifNotFile,redirect',
            'adminJumpToBackend'   => true,
            'enableUrlDecodeCache' => true,
            'enableUrlEncodeCache' => true,
            'emptyUrlReturnValue'  => '/',
        ],
        'preVars' => [
            [
                'GETvar'   => 'L',
                'valueMap' => [
                    'de' => 0,
                    'en' => 1,
                    'fr' => 2,
                ],
                'noMatch'  => 'bypass',
            ],
        ],
        'pagePath' => [
            'type'           => 'user',
            'userFunc'       => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
            'spaceCharacter' => '-',
            'languageGetVar' => 'L',
            'rootpage_id'    => 1,
        ],
        'fileName' => [
            'index' => [],
        ],
        'fixedPostVars' => [],
        'postVarSets'   => [
            '_DEFAULT' => [],
        ],
    ],
];