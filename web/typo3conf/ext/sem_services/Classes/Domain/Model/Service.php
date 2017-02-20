<?php
namespace Rudyk\SemServices\Domain\Model;

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
     * @var string
     **/
    protected $name = '';

    /**
     * @var string
     **/
    protected $email = '';

    /**
     * @var string
     **/
    protected $texts = '';

    /**
     * @var string
     **/
    protected $send = '';

    /**
     * The reviews
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Rudyk\SemServices\Domain\Model\Review>
     * 
     */
    protected $reviews = NULL;

    

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

    
    public function setName($name) 
    {
        $this->name = (string)$name;
    }

    public function getName() 
    {
        return $this->name;
    }


    public function setEmail($email) 
    {
        $this->email = (string)$email;
    }

    public function getEmail() 
    {
        return $this->email;
    }


    public function setTexts($texts) 
    {
        $this->texts = (string)$texts;
    }

    public function getTexts() 
    {
        return $this->texts;
    }


    public function setSend($send) 
    {
        $this->send = (string)$send;
    }

    public function getSend() 
    {
        return $this->send;
    }

    /**
     * Adds a review
     *
     * @param Review $review
     * @return void
     */
    public function addReview(Review $review) {
        $this->reviews->attach($review);
    }

    /**
     * Returns all reviews
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getReview() {
        return $this->reviews;
    }
}
