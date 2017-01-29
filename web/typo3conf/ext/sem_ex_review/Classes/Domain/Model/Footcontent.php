<?php
namespace Rudyk\SemExContent\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Represents Headcontent content element
 *
 * @package sem_ex_content
 * @author Yura Rudyk
 */
class Footcontent extends AbstractEntity
{
    /**
     * @var string
     */
    protected $firstPhone;

    /**
     * @var string
     */
    protected $secondPhone;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $copyright;

    
    /**
     * @return string
     */
    public function getFirstPhone()
    {
        return $this->firstPhone;
    }
    

    /**
     * @param string $firstPhone
     */
    public function setFirstPhone($firstPhone)
    {
        $this->firstPhone = $firstPhone;
    }

    /**
     * @return string
     */
    public function getSecondPhone()
    {
        return $this->secondPhone;
    }

    /**
     * @param string $secondPhone
     */
    public function setSecondPhone($secondPhone)
    {
        $this->secondPhone = $secondPhone;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getCopyright()
    {
        return $this->copyright;
    }
    

    /**
     * @param string $copyright
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;
    }

    
    
    /**
     * @return \Rudyk\SemExContent\Domain\Model\Row
     */
    public function getFootcontent()
    {
        return $this->footcontent;
    }

    /**
     * @param \Rudyk\SemExContent\Domain\Model\Row $footcontent
     */
    public function setFootcontent($footcontent)
    {
        $this->footcontent = $footcontent;
    }
}
