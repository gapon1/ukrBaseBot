<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Inn
 *
 * @ORM\Table(name="inn", uniqueConstraints={@ORM\UniqueConstraint(name="inn_uniq", columns={"inn"})})
 * @ORM\Entity
 */
class Inn
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private int $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="inn", type="bigint", nullable=true)
     */
    private  int $inn;

    /**
     *
     * One product has many features. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Person", mappedBy="inn")
     */
    private $persons;

    /**
     *
     * One product has many features. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Car", mappedBy="inn")
     */
    private $cars;

    /**
     *
     * One product has many features. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Address", mappedBy="inn")
     */
    private $addresses;

    /**
     *
     * One product has many features. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Work", mappedBy="inn")
     */
    private $works;

    public function __construct()
    {
        $this->cars = new ArrayCollection();
        $this->persons = new ArrayCollection();
        $this->addresses = new ArrayCollection();
        $this->works = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getInn(): ?int
    {
        return $this->inn;
    }

    public function setInn(?int $inn): self
    {
        $this->inn = $inn;

        return $this;
    }


}
