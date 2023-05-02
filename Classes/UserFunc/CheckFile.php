<?php
namespace HauerHeinrich\HhVideoExtender\UserFunc;

// use \TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class CheckFile {

    /**
     * Mime types that can be used in the HTML Video tag
     *
     * @var array
     */
    protected $possibleMimeTypes = ['video/mp4', 'video/webm', 'video/ogg', 'video/x-m4v', 'application/ogg'];

    /**
     * External file sources
     *
     * @var array
     */
    protected $possibleExternalSources  = ['youtube', 'vimeo'];

    /**
     * Evaluates
     *
     * @param string $displayCondition
     * @param array $record
     *
     * @return bool
     */
    public function isLocalFile($displayCondition, $record) {
        if(in_array($displayCondition['record']['uid_local'][0]['row']['mime_type'], $this->possibleMimeTypes)) {
            return true;
        }

        return false;
    }

    public function isExternalFile($displayCondition, $record) {
        if(in_array($displayCondition['record']['uid_local'][0]['row']['extension'], $this->possibleExternalSources)) {
            return true;
        }

        return false;
    }
}
