<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table(
 *     name="person",
 *     indexes={@ORM\Index(name="inn_second", columns={"inn_second"}),
 *     @ORM\Index(name="fio_ru", columns={"surname_ru", "first_name_ru", "patronymic_ru"}),
 *     @ORM\Index(name="inn", columns={"inn"}),
 *     @ORM\Index(name="fio", columns={"surname", "first_name", "patronymic"})})
 * @ORM\Entity
 */
class Person
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
     * @ORM\Column(name="surname", type="string", length=255, nullable=true)
     */
    private ?string $surname = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="surname_ru", type="string", length=255, nullable=true)
     */
    private ?string $surnameRu = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
     */
    private ?string $firstName = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="first_name_ru", type="string", length=255, nullable=true)
     */
    private ?string $firstNameRu = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patronymic", type="string", length=255, nullable=true)
     */
    private ?string $patronymic = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patronymic_ru", type="string", length=255, nullable=true)
     */
    private ?string $patronymicRu = null;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="birth_date", type="date", nullable=true)
     */
    private ?string $birthDate = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="birth_country", type="string", length=255, nullable=true)
     */
    private ?string $birthCountry = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="birth_region", type="string", length=255, nullable=true)
     */
    private ?string $birthRegion = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="birth_district", type="string", length=255, nullable=true)
     */
    private ?string $birthDistrict = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="birth_locality_type", type="string", length=255, nullable=true)
     */
    private ?string $birthLocalityType = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="birth_locality_name", type="string", length=255, nullable=true)
     */
    private ?string $birthLocalityName = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="birth_locality_name_foreign", type="string", length=255, nullable=true)
     */
    private ?string $birthLocalityNameForeign = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="language", type="string", length=255, nullable=true)
     */
    private ?string $language = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gender", type="string", length=255, nullable=true)
     */
    private ?string $gender = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dpi", type="string", length=255, nullable=true)
     */
    private ?string $dpi = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address_descriptor", type="string", length=255, nullable=true)
     */
    private ?string $addressDescriptor = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="work_descriptor", type="string", length=255, nullable=true)
     */
    private ?string $workDescriptor = null;

    /**
     * @var Inn
     *
     * @ORM\ManyToOne(targetEntity="Inn", inversedBy="persons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="inn", referencedColumnName="inn")
     * })
     */
    private $inn;

    /**
     * @var Inn
     *
     * @ORM\ManyToOne(targetEntity="Inn")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="inn_second", referencedColumnName="inn")
     * })
     */
    private $innSecond;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(?string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getSurnameRu(): ?string
    {
        return $this->surnameRu;
    }

    public function setSurnameRu(?string $surnameRu): self
    {
        $this->surnameRu = $surnameRu;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getFirstNameRu(): ?string
    {
        return $this->firstNameRu;
    }

    public function setFirstNameRu(?string $firstNameRu): self
    {
        $this->firstNameRu = $firstNameRu;

        return $this;
    }

    public function getPatronymic(): ?string
    {
        return $this->patronymic;
    }

    public function setPatronymic(?string $patronymic): self
    {
        $this->patronymic = $patronymic;

        return $this;
    }

    public function getPatronymicRu(): ?string
    {
        return $this->patronymicRu;
    }

    public function setPatronymicRu(?string $patronymicRu): self
    {
        $this->patronymicRu = $patronymicRu;

        return $this;
    }

    public function getBirthDate(): ?\DateTime
    {
        return $this->birthDate;
    }

    public function setBirthDate(?\DateTime $birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    public function getBirthCountry(): ?string
    {
        return $this->birthCountry;
    }

    public function setBirthCountry(?string $birthCountry): self
    {
        $this->birthCountry = $birthCountry;

        return $this;
    }

    public function getBirthRegion(): ?string
    {
        return $this->birthRegion;
    }

    public function setBirthRegion(?string $birthRegion): self
    {
        $this->birthRegion = $birthRegion;

        return $this;
    }

    public function getBirthDistrict(): ?string
    {
        return $this->birthDistrict;
    }

    public function setBirthDistrict(?string $birthDistrict): self
    {
        $this->birthDistrict = $birthDistrict;

        return $this;
    }

    public function getBirthLocalityType(): ?string
    {
        return $this->birthLocalityType;
    }

    public function setBirthLocalityType(?string $birthLocalityType): self
    {
        $this->birthLocalityType = $birthLocalityType;

        return $this;
    }

    public function getBirthLocalityName(): ?string
    {
        return $this->birthLocalityName;
    }

    public function setBirthLocalityName(?string $birthLocalityName): self
    {
        $this->birthLocalityName = $birthLocalityName;

        return $this;
    }

    public function getBirthLocalityNameForeign(): ?string
    {
        return $this->birthLocalityNameForeign;
    }

    public function setBirthLocalityNameForeign(?string $birthLocalityNameForeign): self
    {
        $this->birthLocalityNameForeign = $birthLocalityNameForeign;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getDpi(): ?string
    {
        return $this->dpi;
    }

    public function setDpi(?string $dpi): self
    {
        $this->dpi = $dpi;

        return $this;
    }

    public function getAddressDescriptor(): ?string
    {
        return $this->addressDescriptor;
    }

    public function setAddressDescriptor(?string $addressDescriptor): self
    {
        $this->addressDescriptor = $addressDescriptor;

        return $this;
    }

    public function getWorkDescriptor(): ?string
    {
        return $this->workDescriptor;
    }

    public function setWorkDescriptor(?string $workDescriptor): self
    {
        $this->workDescriptor = $workDescriptor;

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

    public function getInnSecond(): Inn
    {
        return $this->innSecond;
    }

    public function setInnSecond(Inn $innSecond): self
    {
        $this->innSecond = $innSecond;

        return $this;
    }


}
