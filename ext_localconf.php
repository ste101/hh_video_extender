<?php
defined('TYPO3_MODE') || die();

call_user_func(function() {
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
});
