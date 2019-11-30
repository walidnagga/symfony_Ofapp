<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CooordonneeRepository")
 */
class Cooordonnee
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $num;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $rue;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $municipDeleg;

    /**
     * @ORM\Column(type="integer")
     */
    private $codPost;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $governorat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numTel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNum(): ?int
    {
        return $this->num;
    }

    public function setNum(?int $num): self
    {
        $this->num = $num;

        return $this;
    }

    public function getRue(): ?string
    {
        return $this->rue;
    }

    public function setRue(?string $rue): self
    {
        $this->rue = $rue;

        return $this;
    }

    public function getMunicipDeleg(): ?string
    {
        return $this->municipDeleg;
    }

    public function setMunicipDeleg(string $municipDeleg): self
    {
        $this->municipDeleg = $municipDeleg;

        return $this;
    }

    public function getCodPost(): ?int
    {
        return $this->codPost;
    }

    public function setCodPost(int $codPost): self
    {
        $this->codPost = $codPost;

        return $this;
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

    public function getNumTel(): ?string
    {
        return $this->numTel;
    }

    public function setNumTel(?string $numTel): self
    {
        $this->numTel = $numTel;

        return $this;
    }
}
