<?php
namespace Rudyk\SemExContent\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Represents Headcontent content element
 *
 * @package sem_ex_content
 * @author Yura Rudyk
 */
class Excursion extends AbstractEntity
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $price;

    /**
    * image
    *
    * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
    */
    protected $image = null;

    /**
     * @var string
     */
    protected $class;

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
    * Sets the image
    *
    * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
    * @return void
    */
    public function setImage($image) 
    {
        $this->image = (string)$image;
    }


     /**
    * Returns the image
    *
    * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
    */
    public function getImage() 
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }
    

    /**
     * @param string $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

    
    
    /**
     * @return \Rudyk\SemExContent\Domain\Model\Row
     */
    public function getExcursion()
    {
        return $this->excursion;
    }

    /**
     * @param \Rudyk\SemExContent\Domain\Model\Row $excursion
     */
    public function setExcursion($excursion)
    {
        $this->excursion = $excursion;
    }
}
