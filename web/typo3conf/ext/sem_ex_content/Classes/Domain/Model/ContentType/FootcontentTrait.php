<?php
namespace Rudyk\SemExContent\Domain\Model\ContentType;

/**
 * Contains coolfact properties
 *
 * @package sem_ex_content
 * @subpackage Rudyk\SemExContent\Domain\Model
 * @author Yura Rudyk
 */
trait FootcontentTrait
{
    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Rudyk\SemExContent\Domain\Model\Footcontent>
     */
    protected $footcontents;

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getFootcontent()
    {
        return $this->footcontents;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $footcontents
     */
    public function setFootcontent($footcontents)
    {
        $this->footcontents = $footcontents;
    }
}
