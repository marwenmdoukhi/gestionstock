<?php

namespace App\Entity;

use App\Repository\VenteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VenteRepository::class)
 */
class Vente
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity=Article::class, inversedBy="ventes")
     */
    private $article;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ReferenceEntre", inversedBy="ventes")
     */
    private $refenrenceEntre;


    /**
     * @ORM\Column(type="integer")
     */
    private $montantFact;

    /**
     * @ORM\Column(type="integer")
     */
    private $qte;

    public function __construct()
    {
        $this->refenrenceEntre = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateFacture(): ?\DateTimeInterface
    {
        return $this->dateFacture;
    }

    public function setDateFacture(\DateTimeInterface $dateFacture): self
    {
        $this->dateFacture = $dateFacture;

        return $this;
    }

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(?Article $article): self
    {
        $this->article = $article;

        return $this;
    }

    public function getMontantFact(): ?int
    {
        return $this->montantFact;
    }

    public function setMontantFact(int $montantFact): self
    {
        $this->montantFact = $montantFact;

        return $this;
    }

    public function getQte(): ?int
    {
        return $this->qte;
    }

    public function setQte(int $qte): self
    {
        $this->qte = $qte;

        return $this;
    }

    public function getRefenrenceEntre(): ?ReferenceEntre
    {
        return $this->refenrenceEntre;
    }

    public function setRefenrenceEntre(?ReferenceEntre $refenrenceEntre): self
    {
        $this->refenrenceEntre = $refenrenceEntre;

        return $this;
    }



}
