<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Work
 *
 * @ORM\Table(
 *     name="work",
 *     indexes={@ORM\Index(name="inn_employer", columns={"inn_employer"}),
 *     @ORM\Index(name="inn", columns={"inn"})})
 * @ORM\Entity
 */
class Work
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
     * @ORM\Column(name="edrpou", type="bigint", nullable=true)
     */
    private int $edrpou;

    /**
     * @var string|null
     *
     * @ORM\Column(name="work_place", type="string", length=255, nullable=true)
     */
    private ?string $workPlace = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="work_place_second", type="string", length=255, nullable=true)
     */
    private ?string $workPlaceSecond = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="person_descriptor", type="string", length=255, nullable=true)
     */
    private ?string $personDescriptor = null;

    /**
     * @var Inn
     *
     * @ORM\ManyToOne(targetEntity="Inn")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="inn_employer", referencedColumnName="inn")
     * })
     */
    private $innEmployer;

    /**
     * @var Inn
     *
     * @ORM\ManyToOne(targetEntity="Inn", inversedBy="works")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="inn", referencedColumnName="inn")
     * })
     */
    private $inn;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getEdrpou(): ?int
    {
        return $this->edrpou;
    }

    public function setEdrpou(?int $edrpou): self
    {
        $this->edrpou = $edrpou;

        return $this;
    }

    public function getWorkPlace(): ?string
    {
        return $this->workPlace;
    }

    public function setWorkPlace(?string $workPlace): self
    {
        $this->workPlace = $workPlace;

        return $this;
    }

    public function getWorkPlaceSecond(): ?string
    {
        return $this->workPlaceSecond;
    }

    public function setWorkPlaceSecond(?string $workPlaceSecond): self
    {
        $this->workPlaceSecond = $workPlaceSecond;

        return $this;
    }

    public function getPersonDescriptor(): ?string
    {
        return $this->personDescriptor;
    }

    public function setPersonDescriptor(?string $personDescriptor): self
    {
        $this->personDescriptor = $personDescriptor;

        return $this;
    }

    public function getInnEmployer(): Inn
    {
        return $this->innEmployer;
    }

    public function setInnEmployer(Inn $innEmployer): self
    {
        $this->innEmployer = $innEmployer;

        return $this;
    }

    public function getInn(): Inn
    {
        return $this->inn;
    }

    public function setInn(Inn $inn): self
    {
        $this->inn = $inn;

        return $this;
    }


}
