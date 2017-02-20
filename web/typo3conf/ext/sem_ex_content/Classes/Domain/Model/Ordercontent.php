<?php
namespace Rudyk\SemExContent\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Represents Headcontent content element
 *
 * @package sem_ex_content
 * @author Yura Rudyk
 */
class Ordercontent extends AbstractEntity
{
    /**
     * @var string
     */
    protected $header;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var string
     */
    protected $quantity;

    /**
     * @var string
     */
    protected $wish;

    /**
     * @var string
     */
    protected $send;


    /**
     * @return string
     */
    public function getHeader()
    {
        return $this->header;
    }
    /**
     * @param string $header
     */
    public function setHeader($header)
    {
        $this->header = $header;
    }
    
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
    public function getPhone()
    {
        return $this->phone;
    }
    

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    
    /**
     * @param string $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getWish()
    {
        return $this->wish;
    }
    
    /**
     * @param string $wish
     */
    public function setWish($wish)
    {
        $this->wish = $wish;
    }

    /**
     * @return string
     */
    public function getSend()
    {
        return $this->send;
    }
    
    /**
     * @param string $send
     */
    public function setSend($send)
    {
        $this->send = $send;
    }

    
    
    /**
     * @return \Rudyk\SemExContent\Domain\Model\Row
     */
    public function getOrdercontent()
    {
        return $this->ordercontent;
    }

    /**
     * @param \Rudyk\SemExContent\Domain\Model\Row $ordercontent
     */
    public function setOrdercontent($ordercontent)
    {
        $this->ordercontent = $ordercontent;
    }
}
