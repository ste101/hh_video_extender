<?php
defined('TYPO3_MODE') || die();

call_user_func(function() {

    $extensionKey = 'hh_video_extender';

    // If automatically include of TypoScript is disabled, then you can include it in the (BE) static-template select-box
    if ($GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS'][$extensionKey]['config']['typoScript'] === '0') {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $extensionKey,
            'Configuration/TypoScript',
            'Hauer-Heinrich - Video Extender'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $extensionKey,
            'Configuration/TypoScript/addFluid.typoscript',
            'Hauer-Heinrich - Video Extender: add fluid html'
        );
    }
});
