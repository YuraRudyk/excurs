<?php
namespace Rudyk\SemServices\Domain\Model;

use \TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Service extends AbstractEntity
{
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

}
