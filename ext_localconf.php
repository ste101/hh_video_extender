<?php
defined('TYPO3_MODE') || die();

call_user_func(function() {
    $extensionKey = 'hh_video_extender';

    // automatically add TypoScript, can be disabled in the extension configuration (BE)
    if ($GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS'][$extensionKey]['config']['typoScript'] === '1') {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('@import "EXT:'.$extensionKey.'/Configuration/TypoScript/setup.typoscript"');
    }

    // Overwrite Core Classes
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Core\\Resource\\Rendering\\VideoTagRenderer'] = array(
        'className' => 'HauerHeinrich\\HhVideoExtender\\Rendering\\VideoTagRenderer'
    );
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Core\\Resource\\Rendering\\YouTubeRenderer'] = array(
        'className' => 'HauerHeinrich\\HhVideoExtender\\Rendering\\YouTubeRenderer'
    );
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Core\\Resource\\Rendering\\VimeoRenderer'] = array(
        'className' => 'HauerHeinrich\\HhVideoExtender\\Rendering\\VimeoRenderer'
    );
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Core\\FileReference'] = array(
        'className' => 'HauerHeinrich\\HhVideoExtender\\Resource\\FileReference'
    );
});
