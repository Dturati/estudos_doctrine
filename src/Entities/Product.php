<?php
namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity 
 * @ORM\Table(name="products")
 */
class Product{
    
    /** 
     * @ORM\Id 
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue 
    */
    private $id;

    /** 
     * @ORM\Column(type="string") 
     */
    private $name;

    /**
     * @ORM\Column(type="string",  nullable=true)
     */
    private $year;

     /**
     * @ORM\Column(type="string",  nullable=true)
     */
    private $peso;

    
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

}
