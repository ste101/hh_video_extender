<?php
namespace HauerHeinrich\HhVideoExtender\Resource;

/**
 *
 *
 * @package my_ext
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class FileReference extends TYPO3\CMS\Core\FileReference {

    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @lazy
     */
    protected $previewImage;

    /**
     * __construct
     *
     * @return Product
     */
    public function __construct() {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

            /**
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $previewImage
     */
    public function setPreviewImage($previewImage) {
        $this->previewImage = $previewImage;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getPreviewImage() {
        return $this->previewImage;
    }
}
