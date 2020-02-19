<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table(
 *     name="address",
 *     indexes={@ORM\Index(name="locality_street", columns={"locality_name", "street_name"}),
 *     @ORM\Index(name="inn", columns={"inn"})}
 *     )
 * @ORM\Entity
 */
class Address
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
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private ?string $country = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="region", type="string", length=255, nullable=true)
     */
    private ?string $region = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="district", type="string", length=255, nullable=true)
     */
    private ?string $district = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="locality_type", type="string", length=255, nullable=true)
     */
    private ?string $localityType = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="locality_name", type="string", length=255, nullable=true)
     */
    private ?string $localityName = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="locality_name_foreign", type="string", length=255, nullable=true)
     */
    private ?string $localityNameForeign = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="street_type", type="string", length=255, nullable=true)
     */
    private ?string $streetType = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="street_name", type="string", length=255, nullable=true)
     */
    private ?string $streetName = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="house_number", type="string", length=255, nullable=true)
     */
    private ?string $houseNumber = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="house_letter", type="string", length=255, nullable=true)
     */
    private ?string $houseLetter = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="house_corpus", type="string", length=255, nullable=true)
     */
    private ?string $houseCorpus = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="flat", type="string", length=255, nullable=true)
     */
    private ?string $flat = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=true)
     */
    private ?string $phone = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="person_descriptor", type="string", length=255, nullable=true)
     */
    private ?string $personDescriptor = null;

    /**
     * @var Inn
     *
     * @ORM\ManyToOne(targetEntity="Inn", inversedBy="addresses")
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

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getDistrict(): ?string
    {
        return $this->district;
    }

    public function setDistrict(?string $district): self
    {
        $this->district = $district;

        return $this;
    }

    public function getLocalityType(): ?string
    {
        return $this->localityType;
    }

    public function setLocalityType(?string $localityType): self
    {
        $this->localityType = $localityType;

        return $this;
    }

    public function getLocalityName(): ?string
    {
        return $this->localityName;
    }

    public function setLocalityName(?string $localityName): self
    {
        $this->localityName = $localityName;

        return $this;
    }

    public function getLocalityNameForeign(): ?string
    {
        return $this->localityNameForeign;
    }

    public function setLocalityNameForeign(?string $localityNameForeign): self
    {
        $this->localityNameForeign = $localityNameForeign;

        return $this;
    }

    public function getStreetType(): ?string
    {
        return $this->streetType;
    }

    public function setStreetType(?string $streetType): self
    {
        $this->streetType = $streetType;

        return $this;
    }

    public function getStreetName(): ?string
    {
        return $this->streetName;
    }

    public function setStreetName(?string $streetName): self
    {
        $this->streetName = $streetName;

        return $this;
    }

    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    public function setHouseNumber(?string $houseNumber): self
    {
        $this->houseNumber = $houseNumber;

        return $this;
    }

    public function getHouseLetter(): ?string
    {
        return $this->houseLetter;
    }

    public function setHouseLetter(?string $houseLetter): self
    {
        $this->houseLetter = $houseLetter;

        return $this;
    }

    public function getHouseCorpus(): ?string
    {
        return $this->houseCorpus;
    }

    public function setHouseCorpus(?string $houseCorpus): self
    {
        $this->houseCorpus = $houseCorpus;

        return $this;
    }

    public function getFlat(): ?string
    {
        return $this->flat;
    }

    public function setFlat(?string $flat): self
    {
        $this->flat = $flat;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

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
