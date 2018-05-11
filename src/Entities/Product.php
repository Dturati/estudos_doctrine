<?php declare(strict_types = 1);

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Cache\VoidCache;

/**
 * @ORM\Entity 
 * @ORM\Table(name="products")
 */
class Product
{
    
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
     * @ORM\Column(type="datetime",  nullable=true)
     */
    private $year;

     /**
     * @ORM\Column(type="integer",  nullable=false)
     */
    private $peso;

    
    public function getId() : int
    {
        return $this->id;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    public function setPeso(int $peso)
    {
        $this->peso = $peso;
    }

    public function setYear(string $year) : void
    {
        $this->year = $year;
    }

    public function getYear()
    {
        return $this->year;
    }

}
