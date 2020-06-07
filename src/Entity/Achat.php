<?php

namespace App\Entity;

use App\Repository\AchatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AchatRepository::class)
 */
class Achat
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
    private $codefacture;

    /**
     * @ORM\Column(type="date")
     */
    private $datefacture;

    /**
     * @ORM\Column(type="date")
     */
    private $dateaujo;


    /**
     * @ORM\ManyToOne(targetEntity=Article::class, inversedBy="achat")
     */
    private $article;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ReferenceAchat", inversedBy="achats")
     */
    private $refAchat;

    /**
     * @ORM\Column(type="integer")
     */
    private $qte;





    public function getId(): ?int
    {
        return $this->id;
    }



    public function __construct()
    {
        $this->dateaujo=new \DateTime();
    }

    public function getCodefacture(): ?string
    {
        return $this->codefacture;
    }

    public function setCodefacture(string $codefacture): self
    {
        $this->codefacture = $codefacture;

        return $this;
    }

    public function getDatefacture(): ?\DateTimeInterface
    {
        return $this->datefacture;
    }

    public function setDatefacture(\DateTimeInterface $datefacture): self
    {
        $this->datefacture = $datefacture;

        return $this;
    }

    public function getDateaujo(): ?\DateTimeInterface
    {
        return $this->dateaujo;
    }

    public function setDateaujo(\DateTimeInterface $dateaujo): self
    {
        $this->dateaujo = $dateaujo;

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

    public function getRefAchat(): ?ReferenceAchat
    {
        return $this->refAchat;
    }

    public function setRefAchat(?ReferenceAchat $refAchat): self
    {
        $this->refAchat = $refAchat;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * @param mixed $qte
     */
    public function setQte($qte): void
    {
        $this->qte = $qte;
    }




}
