<?php
namespace HauerHeinrich\HhVideoExtender\Rendering;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use TYPO3\CMS\Core\Resource\FileInterface;

/**
 * YouTube renderer class
 */
class YouTubeRenderer extends \TYPO3\CMS\Core\Resource\Rendering\YouTubeRenderer {

    /**
     * Render for given File(Reference) html output
     *
     * @param FileInterface $file
     * @param int|string $width TYPO3 known format; examples: 220, 200m or 200c
     * @param int|string $height TYPO3 known format; examples: 220, 200m or 200c
     * @param array $options
     * @param bool $usedPathsRelativeToCurrentScript See $file->getPublicUrl()
     * @return string
     */
    public function render(FileInterface $file, $width, $height, array $options = [], $usedPathsRelativeToCurrentScript = false) {
        if ($file->getProperty('defer') === 1) {
            $string = parent::render($file, $width, $height, $options, $usedPathsRelativeToCurrentScript);
            $uid = $file->getProperty('uid');
            $newString = str_replace('<iframe', '<iframe id="vid-'.$uid.'" class="video-defer"', $string);
            $newSrc = str_replace('src=', 'data-src=', $newString);
            $javaScript = '<script>window.onload = function() {var vidDefer_'.$uid.' = document.getElementById("vid-'.$uid.'");if(vidDefer_'.$uid.'.getAttribute("data-src")) {vidDefer_'.$uid.'.setAttribute("src",vidDefer_'.$uid.'.getAttribute("data-src")); }};</script>';
            $result = $newSrc.$javaScript;
            return $result;
        }

        return parent::render($file, $width, $height, $options, $usedPathsRelativeToCurrentScript);
    }
}
