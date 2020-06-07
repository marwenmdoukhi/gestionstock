<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
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
    private $designation;

    /**
     * @ORM\Column(type="integer")
     */
    private $qtePP;

    /**
     * @ORM\Column(type="float")
     */
    private $prixAchat;

    /**
     * @ORM\Column(type="float")
     */
    private $prixVente;

    /**
     * @ORM\Column(type="integer")
     */
    private $qteMax;

    /**
     * @ORM\Column(type="integer")
     */
    private $gteMin;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Famille", inversedBy="articles")
     */
    private $famille;

    /**
     * @ORM\Column(type="integer")
     */
    private $qteStock;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Magazin", inversedBy="articles", cascade={"persist"})
     */
    private $magazins;

    /**
     * @ORM\OneToMany(targetEntity=Vente::class, mappedBy="article")
     */
    private $ventes;

    /**
     * @ORM\OneToMany(targetEntity=Achat::class, mappedBy="article")
     */
    private $achat;


    public function __construct()
    {
        $this->stock = new ArrayCollection();
        $this->qteStock= 0;
        $this->ventes = new ArrayCollection();
        $this->achat = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getQtePP(): ?int
    {
        return $this->qtePP;
    }

    public function setQtePP(int $qtePP): self
    {
        $this->qtePP = $qtePP;

        return $this;
    }

    public function getPrixAchat(): ?int
    {
        return $this->prixAchat;
    }

    public function setPrixAchat(int $prixAchat): self
    {
        $this->prixAchat = $prixAchat;

        return $this;
    }

    public function getPrixVente(): ?int
    {
        return $this->prixVente;
    }

    public function setPrixVente(int $prixVente): self
    {
        $this->prixVente = $prixVente;

        return $this;
    }

    public function getQteMax(): ?int
    {
        return $this->qteMax;
    }

    public function setQteMax(int $qteMax): self
    {
        $this->qteMax = $qteMax;

        return $this;
    }

    public function getGteMin(): ?int
    {
        return $this->gteMin;
    }

    public function setGteMin(int $gteMin): self
    {
        $this->gteMin = $gteMin;

        return $this;
    }





    public function getFamille(): ?Famille
    {
        return $this->famille;
    }

    public function setFamille(?Famille $famille): self
    {
        $this->famille = $famille;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQteStock()
    {
        return $this->qteStock;
    }


    public function __toString(){
        // to show the name of the Category in the select
        return $this->designation;
        // to show the id of the Category in the select
        // return $this->id;
    }
    /**
     * @param mixed $qteStock
     */
    public function setQteStock($qteStock): void
    {
        $this->qteStock = $qteStock;
    }

    public function getMagazins(): ?Magazin
    {
        return $this->magazins;
    }

    public function setMagazins(?Magazin $magazins): self
    {
        $this->magazins = $magazins;

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
            $vente->setArticle($this);
        }

        return $this;
    }

    public function removeVente(Vente $vente): self
    {
        if ($this->ventes->contains($vente)) {
            $this->ventes->removeElement($vente);
            // set the owning side to null (unless already changed)
            if ($vente->getArticle() === $this) {
                $vente->setArticle(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Achat[]
     */
    public function getAchat(): Collection
    {
        return $this->achat;
    }

    public function addAchat(Achat $achat): self
    {
        if (!$this->achat->contains($achat)) {
            $this->achat[] = $achat;
            $achat->setArticle($this);
        }

        return $this;
    }

    public function removeAchat(Achat $achat): self
    {
        if ($this->achat->contains($achat)) {
            $this->achat->removeElement($achat);
            // set the owning side to null (unless already changed)
            if ($achat->getArticle() === $this) {
                $achat->setArticle(null);
            }
        }

        return $this;
    }

  





}
