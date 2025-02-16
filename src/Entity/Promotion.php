<?php

namespace App\Entity;

use App\Repository\PromotionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PromotionRepository::class)]
class Promotion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $code_coupon = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $duree_promotion = null;

    #[ORM\Column]
    private ?float $prix_nouv = null;

    /**
     * @var Collection<int, Produit>
     */
    #[ORM\OneToMany(targetEntity: Produit::class, mappedBy: 'id_promotion')]
    private Collection $id_produit;

    public function __construct()
    {
        $this->id_produit = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeCoupon(): ?string
    {
        return $this->code_coupon;
    }

    public function setCodeCoupon(string $code_coupon): static
    {
        $this->code_coupon = $code_coupon;

        return $this;
    }

    public function getDureePromotion(): ?\DateTimeInterface
    {
        return $this->duree_promotion;
    }

    public function setDureePromotion(\DateTimeInterface $duree_promotion): static
    {
        $this->duree_promotion = $duree_promotion;

        return $this;
    }

    public function getPrixNouv(): ?float
    {
        return $this->prix_nouv;
    }

    public function setPrixNouv(float $prix_nouv): static
    {
        $this->prix_nouv = $prix_nouv;

        return $this;
    }

    /**
     * @return Collection<int, Produit>
     */
    public function getIdProduit(): Collection
    {
        return $this->id_produit;
    }

    public function addIdProduit(Produit $idProduit): static
    {
        if (!$this->id_produit->contains($idProduit)) {
            $this->id_produit->add($idProduit);
            $idProduit->setIdPromotion($this);
        }

        return $this;
    }

    public function removeIdProduit(Produit $idProduit): static
    {
        if ($this->id_produit->removeElement($idProduit)) {
            // set the owning side to null (unless already changed)
            if ($idProduit->getIdPromotion() === $this) {
                $idProduit->setIdPromotion(null);
            }
        }

        return $this;
    }
}
