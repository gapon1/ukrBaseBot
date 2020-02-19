<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Car
 *
 * @ORM\Table(
 *     name="car",
 *     indexes={@ORM\Index(name="n_reg", columns={"n_reg_new"}),
 *     @ORM\Index(name="inn", columns={"inn"})})
 * @ORM\Entity
 */
class Car
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
     * @var string|null
     *
     * @ORM\Column(name="person", type="string", length=255, nullable=true)
     */
    private ?string $person = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="birthday", type="string", length=255, nullable=true)
     */
    private ?string $birthda = null;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reg_addr_koatuu", type="bigint", nullable=true)
     */
    private ?string $regAddrKoatuu = null;

    /**
     * @var int|null
     *
     * @ORM\Column(name="oper_code", type="bigint", nullable=true)
     */
    private ?string $operCode = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="oper_name", type="string", length=255, nullable=true)
     */
    private ?string $operName = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="d_reg", type="string", length=255, nullable=true)
     */
    private ?string $dReg = null;

    /**
     * @var int|null
     *
     * @ORM\Column(name="dep_code", type="bigint", nullable=true)
     */
    private ?string $depCode = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dep", type="string", length=255, nullable=true)
     */
    private ?string $dep = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="brand", type="string", length=255, nullable=true)
     */
    private ?string $brand = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model", type="string", length=255, nullable=true)
     */
    private ?string $model = null;

    /**
     * @var int|null
     *
     * @ORM\Column(name="make_year", type="integer", nullable=true)
     */
    private ?string $makeYear = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", length=255, nullable=true)
     */
    private ?string $color = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kind", type="string", length=255, nullable=true)
     */
    private ?string $kind = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="body", type="string", length=255, nullable=true)
     */
    private ?string $body = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="purpose", type="string", length=255, nullable=true)
     */
    private ?string $purpose = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fuel", type="string", length=255, nullable=true)
     */
    private ?string $fuel = null;

    /**
     * @var int|null
     *
     * @ORM\Column(name="capacity", type="integer", nullable=true)
     */
    private ?string $capacity = null;

    /**
     * @var int|null
     *
     * @ORM\Column(name="own_weight", type="integer", nullable=true)
     */
    private ?string $ownWeight = null;

    /**
     * @var int|null
     *
     * @ORM\Column(name="total_weight", type="integer", nullable=true)
     */
    private ?string $totalWeight = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="n_reg_new", type="string", length=255, nullable=true)
     */
    private ?string $nRegNew = null;

    /**
     * @var Inn
     *
     * @ORM\ManyToOne(targetEntity="Inn", inversedBy="cars")
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

    public function getPerson(): ?string
    {
        return $this->person;
    }

    public function setPerson(?string $person): self
    {
        $this->person = $person;

        return $this;
    }

    public function getBirthda(): ?string
    {
        return $this->birthda;
    }

    public function setBirthda(?string $birthda): self
    {
        $this->birthda = $birthda;

        return $this;
    }

    public function getRegAddrKoatuu(): ?int
    {
        return $this->regAddrKoatuu;
    }

    public function setRegAddrKoatuu(?int $regAddrKoatuu): self
    {
        $this->regAddrKoatuu = $regAddrKoatuu;

        return $this;
    }

    public function getOperCode(): ?int
    {
        return $this->operCode;
    }

    public function setOperCode(?int $operCode): self
    {
        $this->operCode = $operCode;

        return $this;
    }

    public function getOperName(): ?string
    {
        return $this->operName;
    }

    public function setOperName(?string $operName): self
    {
        $this->operName = $operName;

        return $this;
    }

    public function getDReg(): ?string
    {
        return $this->dReg;
    }

    public function setDReg(?string $dReg): self
    {
        $this->dReg = $dReg;

        return $this;
    }

    public function getDepCode(): ?int
    {
        return $this->depCode;
    }

    public function setDepCode(?int $depCode): self
    {
        $this->depCode = $depCode;

        return $this;
    }

    public function getDep(): ?string
    {
        return $this->dep;
    }

    public function setDep(?string $dep): self
    {
        $this->dep = $dep;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(?string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getMakeYear(): ?int
    {
        return $this->makeYear;
    }

    public function setMakeYear(?int $makeYear): self
    {
        $this->makeYear = $makeYear;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getKind(): ?string
    {
        return $this->kind;
    }

    public function setKind(?string $kind): self
    {
        $this->kind = $kind;

        return $this;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(?string $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function getPurpose(): ?string
    {
        return $this->purpose;
    }

    public function setPurpose(?string $purpose): self
    {
        $this->purpose = $purpose;

        return $this;
    }

    public function getFuel(): ?string
    {
        return $this->fuel;
    }

    public function setFuel(?string $fuel): self
    {
        $this->fuel = $fuel;

        return $this;
    }

    public function getCapacity(): ?int
    {
        return $this->capacity;
    }

    public function setCapacity(?int $capacity): self
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getOwnWeight(): ?int
    {
        return $this->ownWeight;
    }

    public function setOwnWeight(?int $ownWeight): self
    {
        $this->ownWeight = $ownWeight;

        return $this;
    }

    public function getTotalWeight(): ?int
    {
        return $this->totalWeight;
    }

    public function setTotalWeight(?int $totalWeight): self
    {
        $this->totalWeight = $totalWeight;

        return $this;
    }

    public function getNRegNew(): ?string
    {
        return $this->nRegNew;
    }

    public function setNRegNew(?string $nRegNew): self
    {
        $this->nRegNew = $nRegNew;

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
