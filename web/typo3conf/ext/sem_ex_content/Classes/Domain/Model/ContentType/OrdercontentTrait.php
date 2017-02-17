<?php
namespace Rudyk\SemExContent\Domain\Model\ContentType;

/**
 * Contains coolfact properties
 *
 * @package sem_ex_content
 * @subpackage Rudyk\SemExContent\Domain\Model
 * @author Yura Rudyk
 */
trait OrdercontentTrait
{
    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Rudyk\SemExContent\Domain\Model\Ordercontent>
     */
    protected $ordercontents;

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getOrdercontent()
    {
        return $this->ordercontents;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $ordercontents
     */
    public function setOrdercontent($ordercontents)
    {
        $this->ordercontents = $ordercontents;
    }
}
