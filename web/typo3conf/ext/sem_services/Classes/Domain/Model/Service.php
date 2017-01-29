<?php
namespace Media711\SemServices\Domain\Model;

use \TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Service extends AbstractEntity
{
    /**
     * @var string
     **/
    protected $header = '';

    /**
     * @var string
     **/
    protected $description = '';

    /**
    * image
    *
    * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
    */
    protected $image = null;

    public function setHeader($header) 
    {
        $this->header = (string)$header;
    }

    public function getHeader() 
    {
        return $this->header;
    }

    public function setDescription($description) 
    {
        $this->description = (string)$description;
    }

    public function getDescription() 
    {
        return $this->description;
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
}
