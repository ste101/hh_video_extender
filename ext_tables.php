<?php
defined('TYPO3') || die();

call_user_func(function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
        'sys_file_reference',
        'EXT:hh_video_extender/Resources/Private/Language/locallang_csh_sysfilereference.xlf'
    );
});
