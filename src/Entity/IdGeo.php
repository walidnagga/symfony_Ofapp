<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IdGeoRepository")
 */
class IdGeo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $governorat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $delegMunicip;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cordX;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cordY;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $num;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGovernorat(): ?string
    {
        return $this->governorat;
    }

    public function setGovernorat(string $governorat): self
    {
        $this->governorat = $governorat;

        return $this;
    }

    public function getDelegMunicip(): ?string
    {
        return $this->delegMunicip;
    }

    public function setDelegMunicip(string $delegMunicip): self
    {
        $this->delegMunicip = $delegMunicip;

        return $this;
    }

    public function getCordX(): ?string
    {
        return $this->cordX;
    }

    public function setCordX(string $cordX): self
    {
        $this->cordX = $cordX;

        return $this;
    }

    public function getCordY(): ?string
    {
        return $this->cordY;
    }

    public function setCordY(string $cordY): self
    {
        $this->cordY = $cordY;

        return $this;
    }

    public function getNum(): ?string
    {
        return $this->num;
    }

    public function setNum(string $num): self
    {
        $this->num = $num;

        return $this;
    }
}
