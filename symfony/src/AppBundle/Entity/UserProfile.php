<?php
// src/AppBundle/Entity/UserProfile.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use Misd\PhoneNumberBundle\Validator\Constraints\PhoneNumber as AssertPhoneNumber;

/**
 * @ORM\Entity
 * @ORM\Table(name="user_profile") 
 */
class UserProfile
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=255)  
     *
     */
    private $first_name;    

    
    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    private $last_name;      


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phoneNumber;   

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image = 'default.jpg';

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $color = '#3C8DBC';

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $cleaning_time;    

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return UserProfile
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return UserProfile
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set phoneNumber
     *
     * @param phone_number $phoneNumber
     *
     * @return UserProfile
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return phone_number
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return UserProfile
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return UserProfile
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set cleaningTime
     *
     * @param \DateTime $cleaningTime
     *
     * @return UserProfile
     */
    public function setCleaningTime($cleaningTime)
    {
        $this->cleaning_time = $cleaningTime;

        return $this;
    }

    /**
     * Get cleaningTime
     *
     * @return \DateTime
     */
    public function getCleaningTime()
    {
        return $this->cleaning_time;
    }
}
