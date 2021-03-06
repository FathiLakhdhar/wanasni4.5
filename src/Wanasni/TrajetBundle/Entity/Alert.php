<?php

namespace Wanasni\TrajetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Alert
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Wanasni\TrajetBundle\Entity\AlertRepository")
 */
class Alert
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $origine;
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $destination;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     * @Assert\Email()
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="freqeunce", type="string", length=10)
     * @Assert\Choice(choices = {"UNIQUE", "REGULAR"}, message = "Choose a valid frequence.")
     */
    private $freqeunce;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * Alert constructor.
     */
    public function __construct()
    {
        $this->date= date('Y-m-d');
    }


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
     * Set email
     *
     * @param string $email
     * @return Alert
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set freqeunce
     *
     * @param string $freqeunce
     * @return Alert
     */
    public function setFreqeunce($freqeunce)
    {
        $this->freqeunce = $freqeunce;
    
        return $this;
    }

    /**
     * Get freqeunce
     *
     * @return string 
     */
    public function getFreqeunce()
    {
        return $this->freqeunce;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Alert
     */
    public function setDate($date)
    {
        $this->date = date_create($date);
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set origine
     *
     * @param string $origine
     * @return Alert
     */
    public function setOrigine($origine)
    {
        $this->origine = $origine;
    
        return $this;
    }

    /**
     * Get origine
     *
     * @return string 
     */
    public function getOrigine()
    {
        return $this->origine;
    }

    /**
     * Set destination
     *
     * @param string $destination
     * @return Alert
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    
        return $this;
    }

    /**
     * Get destination
     *
     * @return string 
     */
    public function getDestination()
    {
        return $this->destination;
    }
}