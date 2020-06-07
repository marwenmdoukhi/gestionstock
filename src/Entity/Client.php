<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
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
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $raisonSocial;

    /**
     * @ORM\Column(type="date")
     */
    private $datecreation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $matriculeFiscal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel;



    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ReferenceEntre", mappedBy="clients")
     */
    private $refenrenceEntre;



    public function __construct()
    {
        $this->refenrenceEntre = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getRaisonSocial(): ?string
    {
        return $this->raisonSocial;
    }

    public function setRaisonSocial(string $raisonSocial): self
    {
        $this->raisonSocial = $raisonSocial;

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

    public function getMatriculeFiscal(): ?string
    {
        return $this->matriculeFiscal;
    }

    public function setMatriculeFiscal(string $matriculeFiscal): self
    {
        $this->matriculeFiscal = $matriculeFiscal;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * @return Collection|ReferenceEntre[]
     */
    public function getRefenrenceEntre(): Collection
    {
        return $this->refenrenceEntre;
    }

    public function addRefenrenceEntre(ReferenceEntre $refenrenceEntre): self
    {
        if (!$this->refenrenceEntre->contains($refenrenceEntre)) {
            $this->refenrenceEntre[] = $refenrenceEntre;
            $refenrenceEntre->setClients($this);
        }

        return $this;
    }

    public function removeRefenrenceEntre(ReferenceEntre $refenrenceEntre): self
    {
        if ($this->refenrenceEntre->contains($refenrenceEntre)) {
            $this->refenrenceEntre->removeElement($refenrenceEntre);
            // set the owning side to null (unless already changed)
            if ($refenrenceEntre->getClients() === $this) {
                $refenrenceEntre->setClients(null);
            }
        }

        return $this;
    }

    public function setRefenrenceEntre(?ReferenceEntre $refenrenceEntre): self
    {
        $this->refenrenceEntre = $refenrenceEntre;

        return $this;
    }
}
