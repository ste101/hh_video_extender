<?php
$customColumns = [
    'controls' => [
        'displayCond' => 'USER:HauerHeinrich\\HhVideoExtender\\UserFunc\\CheckFile->isLocalFile',
        'exclude' => true,
        'label' => 'Controls',
        'config' => [
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
            'items' => [
                [
                    0 => '',
                    1 => '',
                ]
            ],
        ]
    ],
    'loop' => [
        'displayCond' => 'USER:HauerHeinrich\\HhVideoExtender\\UserFunc\\CheckFile->isLocalFile',
        'exclude' => true,
        'label' => 'Loop',
        'config' => [
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => [
                [
                    0 => '',
                    1 => '',
                ]
            ],
        ]
    ],
    'muted' => [
        'displayCond' => 'USER:HauerHeinrich\\HhVideoExtender\\UserFunc\\CheckFile->isLocalFile',
        'exclude' => true,
        'label' => 'muted (automaticly on autoplay)',
        'config' => [
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => [
                [
                    0 => '',
                    1 => '',
                ]
            ],
        ]
    ],
    'preload' => [
        'displayCond' => 'USER:HauerHeinrich\\HhVideoExtender\\UserFunc\\CheckFile->isLocalFile',
        'exclude' => true,
        'label' => 'preload',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['auto', 0, ''],
                ['metadata', 1, ''],
                ['none', 2, ''],
            ],
            'default' => 2,
        ]
    ],

    'defer' => [
        'displayCond' => 'USER:HauerHeinrich\\HhVideoExtender\\UserFunc\\CheckFile->isExternalFile',
        'exclude' => true,
        'label' => 'Defer loading',
        'description' => 'Note: uses javascript to do that',
        'config' => [
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => [
                [
                    0 => '',
                    1 => '',
                ]
            ],
        ]
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'sys_file_reference',
    $customColumns
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'sys_file_reference',
    'videoOverlayPalette',
    'loop, muted, preload, defer, controls'
);
