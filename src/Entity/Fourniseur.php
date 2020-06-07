<?php

namespace App\Entity;

use App\Repository\FourniseurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FourniseurRepository::class)
 */
class Fourniseur
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $raisionSocial;

    /**
     * @ORM\Column(type="date")
     */
    private $datecreation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $matruclefiscal;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;


    /**
     * @ORM\OneToMany(targetEntity=ReferenceAchat::class, mappedBy="fourisseur")
     */
    private $refenrenceAchat;
    public function __toString()
    {
        return $this-> nom;
}

    public function __construct()
    {
        $this->datecreation=new \DateTime();
        $this->refenrenceAchat = new ArrayCollection();
    }




    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRaisionSocial(): ?string
    {
        return $this->raisionSocial;
    }

    public function setRaisionSocial(string $raisionSocial): self
    {
        $this->raisionSocial = $raisionSocial;

        return $this;
    }

    public function getDatecreation(): ?\DateTimeInterface
    {
        return $this->datecreation;
    }

    public function setDatecreation(\DateTimeInterface $datecreation): self
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    public function getMatruclefiscal(): ?string
    {
        return $this->matruclefiscal;
    }

    public function setMatruclefiscal(string $matruclefiscal): self
    {
        $this->matruclefiscal = $matruclefiscal;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse): void
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return Collection|ReferenceAchat[]
     */
    public function getRefenrenceAchat(): Collection
    {
        return $this->refenrenceAchat;
    }

    public function addRefenrenceAchat(ReferenceAchat $refenrenceAchat): self
    {
        if (!$this->refenrenceAchat->contains($refenrenceAchat)) {
            $this->refenrenceAchat[] = $refenrenceAchat;
            $refenrenceAchat->setFourisseur($this);
        }

        return $this;
    }

    public function removeRefenrenceAchat(ReferenceAchat $refenrenceAchat): self
    {
        if ($this->refenrenceAchat->contains($refenrenceAchat)) {
            $this->refenrenceAchat->removeElement($refenrenceAchat);
            // set the owning side to null (unless already changed)
            if ($refenrenceAchat->getFourisseur() === $this) {
                $refenrenceAchat->setFourisseur(null);
            }
        }

        return $this;
    }



}
