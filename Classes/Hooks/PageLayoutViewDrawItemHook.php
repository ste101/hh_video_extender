<?php

namespace HauerHeinrich\HhVideoExtender\Hooks;

use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use TYPO3\CMS\Backend\View\PageLayoutView;
use TYPO3\CMS\Backend\View\PageLayoutViewDrawItemHookInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Hook to render preview widget of custom content elements in page module
 * @see \TYPO3\CMS\Backend\View\PageLayoutView::tt_content_drawItem()
 */
class PageLayoutViewDrawItemHook implements PageLayoutViewDrawItemHookInterface {

    /**
     * Rendering for custom content elements
     *
     * @param PageLayoutView $parentObject
     * @param bool $drawItem
     * @param string $headerContent
     * @param string $itemContent
     * @param array $row
     */
    public function preProcess(PageLayoutView &$parentObject, &$drawItem, &$headerContent, &$itemContent, array &$row) {
        if($row['CType'] !== 'textmedia') return;

        $drawItem = false;
        $headerContent = '<strong>' . htmlspecialchars($row['header']) . '</strong><br />';

        // Sammelt die Flexform-Einstellungen und entfernt bestimmte Array-Keys ("data", "sDEF", "lDEF", "vDEF") zur besseren Nutzung in Fluid
        // $flexform = $this->cleanUpArray(GeneralUtility::xml2array($row['pi_flexform']), array('data', 'sDEF', 'lDEF', 'vDEF'));

        // Festlegen der Template-Datei
        /** @var \TYPO3\CMS\Fluid\View\StandaloneView $fluidTemplate */
        $fluidTmplFilePath = GeneralUtility::getFileAbsFileName('typo3conf/ext/hh_video_extender/Resources/Private/Templates/MeinBackendTemplate.html');
        $fluidTmpl = GeneralUtility::makeInstance('TYPO3\CMS\Fluid\View\StandaloneView');
        $fluidTmpl->setTemplatePathAndFilename($fluidTmplFilePath);
        // $fluidTmpl->assign('flex', $flexform);
        $fluidTmpl->assign('row', $row);

        $fileRepository = GeneralUtility::makeInstance(\TYPO3\CMS\Core\Resource\FileRepository::class);
        $assets = $fileRepository->findByRelation('tt_content', 'assets', $row['uid']);
        foreach ($assets as $key => $value) {
            $assets['prevImage'] = $fileRepository->findByRelation('sys_file_reference', 'preview_image', $value->getUid());
        }

        DebuggerUtility::var_dump($assets);

        // Rendern
        $itemContent = $parentObject->linkEditContent($fluidTmpl->render(), $row);
    }

    /**
     * @param array $cleanUpArray
     * @param array $notAllowed
     * @return array|mixed
     */
    public function cleanUpArray(array $cleanUpArray, array $notAllowed) {
        $cleanArray = array();
        foreach ($cleanUpArray as $key => $value) {
            if(in_array($key, $notAllowed)) {
                return is_array($value) ? $this->cleanUpArray($value, $notAllowed) : $value;
            } else if(is_array($value)) {
                $cleanArray[$key] = $this->cleanUpArray($value, $notAllowed);
            }
        }
        return $cleanArray;
    }
}
