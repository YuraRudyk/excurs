<?php
namespace Rudyk\SemExContent\Domain\Model\ContentType;

/**
 * Contains coolfact properties
 *
 * @package sem_ex_content
 * @subpackage Rudyk\SemExContent\Domain\Model
 * @author Yura Rudyk
 */
trait ExcursionTrait
{
    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Rudyk\SemExContent\Domain\Model\Excursion>
     */
    protected $excursions;

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getExcursion()
    {
        return $this->excursions;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $excursions
     */
    public function setExcursion($excursions)
    {
        $this->excursions = $excursions;
    }
}
