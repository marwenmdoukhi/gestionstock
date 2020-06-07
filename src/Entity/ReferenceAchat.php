<?php

namespace App\Entity;

use App\Repository\ReferenceAchatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReferenceAchatRepository::class)
 */
class ReferenceAchat
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateRefrence;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reference;

    /**
     * @ORM\ManyToOne(targetEntity=Fourniseur::class, inversedBy="refenrenceAchat")
     */
    private $fourisseur;



    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Achat", mappedBy="refAchat")
     */
    private $achats;


    public function __construct()
    {
        $this->dateRefrence=new \DateTime();
        $this->achats = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateRefrence(): ?\DateTimeInterface
    {
        return $this->dateRefrence;
    }

    public function setDateRefrence(\DateTimeInterface $dateRefrence): self
    {
        $this->dateRefrence = $dateRefrence;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getFourisseur(): ?Fourniseur
    {
        return $this->fourisseur;
    }

    public function setFourisseur(?Fourniseur $fourisseur): self
    {
        $this->fourisseur = $fourisseur;

        return $this;
    }

    /**
     * @return Collection|Achat[]
     */
    public function getAchats(): Collection
    {
        return $this->achats;
    }

    public function addAchat(Achat $achat): self
    {
        if (!$this->achats->contains($achat)) {
            $this->achats[] = $achat;
            $achat->setRefAchat($this);
        }

        return $this;
    }

    public function removeAchat(Achat $achat): self
    {
        if ($this->achats->contains($achat)) {
            $this->achats->removeElement($achat);
            // set the owning side to null (unless already changed)
            if ($achat->getRefAchat() === $this) {
                $achat->setRefAchat(null);
            }
        }

        return $this;
    }



}
