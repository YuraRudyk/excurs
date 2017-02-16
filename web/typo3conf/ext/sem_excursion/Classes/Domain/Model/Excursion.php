<?php
namespace Rudyk\SemExcursion\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

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
         * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
         * @lazy
         */
    protected $image = null;

    /**
    * image
    *
    * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
    */
    protected $test = null;

    /**
    * image
    *
    * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
    */
    protected $image2 = null;

    /**
    * image
    *
    * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
    */
    protected $image3 = null;

    /**
     * @var string
     */
    protected $class;

    /**
     * @var string
     */
    protected $adInfo;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $orderEx;

    
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
     * sets image
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $image
     * @return void
     */
    public function setImage($image) 
    {
        $this->image = $image;
    }


    /**
     * returns image
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
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
     * @return string
     */
    public function getAdInfo()
    {
        return $this->adInfo;
    }
    
    /**
     * @param string $adInfo
     */
    public function setAdInfo($adInfo)
    {
        $this->adInfo = $adInfo;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getOrderEx()
    {
        return $this->orderEx;
    }
    
    /**
     * @param string $orderEx
     */
    public function setOrderEx($orderEx)
    {
        $this->orderEx = $orderEx;
    }

}
