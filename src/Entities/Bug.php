<?php declare(strict_types = 1);

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use App\Entities\User;
use App\Entities\Product;

/**
 * @ORM\Entity
 * @ORM\Table(name="bugs")
 */
class Bug
{
    /**
     *@ORM\Id
     *@ORM\Column(type="integer")
     *@ORM\GeneratedValue
     */
    private $id;

    /**
     *@ORM\Column(type="string")
     *@var string
     */
    private $description;

    /**
     *@ORM\Column(type="datetime")
     *@var datetime
     */
    private $created;

    /**
     *@ORM\Column("string")
     *@var string
     */
    private $status;

     /**
     * @ORM\ManyToMany(targetEntity="Product")
     **/
    private $products;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="assignedBugs")
     */
    private $engineer;

     /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="reportedBugs")
     **/
    private $reporter;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }


    public function getId() : int
    {
        return $this->id;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getDescription() : string
    {
        return $this->description;
    }

    public function setCreated(\DateTime $created)
    {
        $this->created = $created;
    }

    public function getCreated() : \DateTime
    {
        return $this->created;
    }


    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus() : string
    {
        return $this->status;
    }

    public function setEngineer(User $engineer)
    {
        $engineer->assignedToBug($this);
        $this->engineer = $engineer;
    }

    public function setReporter(User $reporter)
    {
        $reporter->addReportedBug($this);
        $this->reporter = $reporter;
    }

    public function getEngineer()
    {
        return $this->engineer;
    }

    public function getReporter()
    {
        return $this->reporter;
    }

    public function assignToProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function getProducts()
    {
        return $this->products;
    }

}