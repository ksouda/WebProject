<?php

namespace App\Entity;

use App\Repository\MateriauxRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MateriauxRepository::class)]
class Materiaux
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_materiel = null;

    #[ORM\Column]
    private ?int $quantite_stock = null;

    #[ORM\Column]
    private ?int $seuil_min = null;

    #[ORM\Column]
    private ?float $prix_unitaire = null;

    #[ORM\Column(length: 255)]
    private ?string $categorie = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;


    #[ORM\ManyToOne(inversedBy: 'fournisseurM')]
    private ?fournisseur $id_fournisseur = null;

    /**
     * @var Collection<int, Commande>
     */
    #[ORM\ManyToMany(targetEntity: Commande::class, mappedBy: 'id_materiel')]
    private Collection $id_commande;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?user $id_user = null;

    public function __construct()
    {
        $this->id_commande = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMateriel(): ?string
    {
        return $this->nom_materiel;
    }

    public function setNomMateriel(string $nom_materiel): static
    {
        $this->nom_materiel = $nom_materiel;

        return $this;
    }

    public function getQuantiteStock(): ?int
    {
        return $this->quantite_stock;
    }

    public function setQuantiteStock(int $quantite_stock): static
    {
        $this->quantite_stock = $quantite_stock;

        return $this;
    }

    public function getSeuilMin(): ?int
    {
        return $this->seuil_min;
    }

    public function setSeuilMin(int $seuil_min): static
    {
        $this->seuil_min = $seuil_min;

        return $this;
    }

    public function getPrixUnitaire(): ?float
    {
        return $this->prix_unitaire;
    }

    public function setPrixUnitaire(float $prix_unitaire): static
    {
        $this->prix_unitaire = $prix_unitaire;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }


    public function getIdFournisseur(): ?fournisseur
    {
        return $this->id_fournisseur;
    }

    public function setIdFournisseur(?fournisseur $id_fournisseur): static
    {
        $this->id_fournisseur = $id_fournisseur;

        return $this;
    }

    /**
     * @return Collection<int, Commande>
     */
    public function getIdCommande(): Collection
    {
        return $this->id_commande;
    }

    public function addIdCommande(Commande $idCommande): static
    {
        if (!$this->id_commande->contains($idCommande)) {
            $this->id_commande->add($idCommande);
            $idCommande->addIdMateriel($this);
        }

        return $this;
    }

    public function removeIdCommande(Commande $idCommande): static
    {
        if ($this->id_commande->removeElement($idCommande)) {
            $idCommande->removeIdMateriel($this);
        }

        return $this;
    }

    public function getIdUser(): ?user
    {
        return $this->id_user;
    }

    public function setIdUser(?user $id_user): static
    {
        $this->id_user = $id_user;

        return $this;
    }
}
