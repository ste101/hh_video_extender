<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "hh_video_extender"
 *
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF['hh_video_extender'] = [
    'title' => 'Hauer-Heinrich - Video Extender',
    'description' => 'Hauer-Heinrich - Extends sys_file_reference video/media. Added attributes to select in content element (eg textmedia) like: muted, loop, controls, previewImage and so on.',
    'category' => 'fe',
    'author' => 'Christian Hackl',
    'author_email' => 'chackl@hauer-heinrich.de',
    'state' => 'beta',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '0.1.61',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.9.99',
            'fluid_styled_content' => '9.5.0-9.9.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'HauerHeinrich\\HhVideoExtender\\' => 'Classes'
        ],
    ],
];
