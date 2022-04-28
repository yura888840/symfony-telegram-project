<?php

use App\Repository\FlatAdvertisement;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FlatAdvertisementRepository:::class)]
class FlatAdvertisement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $land;

    #[ORM\Column(type: 'string', length: 255)]
    private $city;

    #[ORM\Column(type: 'string', length: 255)]
    private $address;

    #[ORM\Column(type: 'string', length: 255)]
    private $owner_number;

    #[ORM\Column(type: 'string', length: 255)]
    private $status;

    #[ORM\Column(type: 'datetime')]
    private $created_at;

    /**
     * @param $created_at
     */
    public function __construct($created_at)
    {
        $this->created_at = new DateTimeImmutable('now', new DateTimeZone('Europe/Berlin'));
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return FlatAdvertisement
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLand()
    {
        return $this->land;
    }

    /**
     * @param mixed $land
     * @return FlatAdvertisement
     */
    public function setLand($land)
    {
        $this->land = $land;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     * @return FlatAdvertisement
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     * @return FlatAdvertisement
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOwnerNumber()
    {
        return $this->owner_number;
    }

    /**
     * @param mixed $owner_number
     * @return FlatAdvertisement
     */
    public function setOwnerNumber($owner_number)
    {
        $this->owner_number = $owner_number;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return FlatAdvertisement
     */
    public function setStatus($status)
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
    public function setCreatedAt(DateTimeImmutable $created_at): FlatAdvertisement
    {
        $this->created_at = $created_at;
        return $this;
    }
}
