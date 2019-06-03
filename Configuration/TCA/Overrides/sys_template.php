<?php
defined('TYPO3_MODE') || die();

call_user_func(function() {

    $extensionKey = 'hh_video_extender';

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Hauer-Heinrich - Video Extender'
    );
});
