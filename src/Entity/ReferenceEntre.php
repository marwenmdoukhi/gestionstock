<?php

namespace App\Entity;

use App\Repository\ReferenceEntreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReferenceEntreRepository::class)
 */
class ReferenceEntre
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
    private $reference;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Client", inversedBy="refenrenceEntre")
     */
    private $clients;

    /**
     * @ORM\Column(type="date")
     */
    private $dateRefrence;



    /**
     * @ORM\OneToMany(targetEntity=Vente::class, mappedBy="refenrenceEntre")
     */
    private $ventes;

    public function __construct()
    {
        $this->dateRefrence=new \DateTime();
        $this->ventes = new ArrayCollection();
        $this->clients = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getClients(): ?Client
    {
        return $this->clients;
    }

    public function setClients(?Client $clients): self
    {
        $this->clients = $clients;

        return $this;
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

    /**
     * @return Collection|Vente[]
     */
    public function getVentes(): Collection
    {
        return $this->ventes;
    }

    public function addVente(Vente $vente): self
    {
        if (!$this->ventes->contains($vente)) {
            $this->ventes[] = $vente;
            $vente->setRefenrenceEntre($this);
        }

        return $this;
    }

    public function removeVente(Vente $vente): self
    {
        if ($this->ventes->contains($vente)) {
            $this->ventes->removeElement($vente);
            // set the owning side to null (unless already changed)
            if ($vente->getRefenrenceEntre() === $this) {
                $vente->setRefenrenceEntre(null);
            }
        }

        return $this;
    }

    public function addClient(Client $client): self
    {
        if (!$this->clients->contains($client)) {
            $this->clients[] = $client;
            $client->setRefenrenceEntre($this);
        }

        return $this;
    }

    public function removeClient(Client $client): self
    {
        if ($this->clients->contains($client)) {
            $this->clients->removeElement($client);
            // set the owning side to null (unless already changed)
            if ($client->getRefenrenceEntre() === $this) {
                $client->setRefenrenceEntre(null);
            }
        }

        return $this;
    }
}
