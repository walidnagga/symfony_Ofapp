<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ExpertiseRepository")
 */
class Expertise
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
    private $numDossier;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $longServitude;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $largServitude;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $longDegat;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $largDegat;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=3)
     */
    private $prixUnitDegat;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=3)
     */
    private $prixUnitServitude;

    /**
     * @ORM\Column(type="decimal", precision=8, scale=3)
     */
    private $montantDegat;

    /**
     * @ORM\Column(type="decimal", precision=8, scale=3)
     */
    private $montantServitude;

    /**
     * @ORM\Column(type="decimal", precision=8, scale=3)
     */
    private $montantGlobal;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumDossier(): ?string
    {
        return $this->numDossier;
    }

    public function setNumDossier(string $numDossier): self
    {
        $this->numDossier = $numDossier;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getLongServitude(): ?string
    {
        return $this->longServitude;
    }

    public function setLongServitude(string $longServitude): self
    {
        $this->longServitude = $longServitude;

        return $this;
    }

    public function getLargServitude(): ?string
    {
        return $this->largServitude;
    }

    public function setLargServitude(string $largServitude): self
    {
        $this->largServitude = $largServitude;

        return $this;
    }

    public function getLongDegat(): ?string
    {
        return $this->longDegat;
    }

    public function setLongDegat(string $longDegat): self
    {
        $this->longDegat = $longDegat;

        return $this;
    }

    public function getLargDegat(): ?string
    {
        return $this->largDegat;
    }

    public function setLargDegat(string $largDegat): self
    {
        $this->largDegat = $largDegat;

        return $this;
    }

    public function getPrixUnitDegat(): ?string
    {
        return $this->prixUnitDegat;
    }

    public function setPrixUnitDegat(string $prixUnitDegat): self
    {
        $this->prixUnitDegat = $prixUnitDegat;

        return $this;
    }

    public function getPrixUnitServitude(): ?string
    {
        return $this->prixUnitServitude;
    }

    public function setPrixUnitServitude(string $prixUnitServitude): self
    {
        $this->prixUnitServitude = $prixUnitServitude;

        return $this;
    }

    public function getMontantDegat(): ?string
    {
        return $this->montantDegat;
    }

    public function setMontantDegat(string $montantDegat): self
    {
        $this->montantDegat = $montantDegat;

        return $this;
    }

    public function getMontantServitude(): ?string
    {
        return $this->montantServitude;
    }

    public function setMontantServitude(string $montantServitude): self
    {
        $this->montantServitude = $montantServitude;

        return $this;
    }

    public function getMontantGlobal(): ?string
    {
        return $this->montantGlobal;
    }

    public function setMontantGlobal(string $montantGlobal): self
    {
        $this->montantGlobal = $montantGlobal;

        return $this;
    }
}
