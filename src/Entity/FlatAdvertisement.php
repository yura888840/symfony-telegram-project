<?php

namespace App\Entity;

use App\Repository\FlatAdvertisementRepository;
use DateTimeImmutable;
use DateTimeZone;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FlatAdvertisementRepository::class)]
class FlatAdvertisement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private mixed $id;

    #[ORM\Column(type: 'string', length: 255)]
    private mixed $land;

    #[ORM\Column(type: 'string', length: 255)]
    private mixed $city;

    #[ORM\Column(type: 'string', length: 255)]
    private mixed $address;

    #[ORM\Column(type: 'string', length: 255)]
    private mixed $owner_number;

    #[ORM\Column(type: 'string', length: 255)]
    private mixed $additional_info;

    #[ORM\Column(type: 'string', length: 255)]
    private mixed $status;

    #[ORM\Column(type: 'datetime')]
    private DateTimeImmutable $created_at;

    /**
     * @throws \Exception
     */
    public function __construct()
    {
        $this->created_at = new DateTimeImmutable('now', new DateTimeZone('Europe/Berlin'));
    }

    /**
     * @return mixed
     */
    public function getId(): mixed
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return FlatAdvertisement
     */
    public function setId(mixed $id): static
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLand(): mixed
    {
        return $this->land;
    }

    /**
     * @param mixed $land
     * @return FlatAdvertisement
     */
    public function setLand(mixed $land): static
    {
        $this->land = $land;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity(): mixed
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     * @return FlatAdvertisement
     */
    public function setCity(mixed $city): static
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress(): mixed
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     * @return FlatAdvertisement
     */
    public function setAddress(mixed $address): static
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOwnerNumber(): mixed
    {
        return $this->owner_number;
    }

    /**
     * @param mixed $owner_number
     * @return FlatAdvertisement
     */
    public function setOwnerNumber(mixed $owner_number): static
    {
        $this->owner_number = $owner_number;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus(): mixed
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return FlatAdvertisement
     */
    public function setStatus(mixed $status): static
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->created_at;
    }

    /**
     * @param DateTimeImmutable $created_at
     * @return FlatAdvertisement
     */
    public function setCreatedAt(DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAdditionalInfo(): mixed
    {
        return $this->additional_info;
    }

    /**
     * @param mixed $additional_info
     * @return FlatAdvertisement
     */
    public function setAdditionalInfo(mixed $additional_info): static
    {
        $this->additional_info = $additional_info;
        return $this;
    }
}
