<?php

namespace App\Entity;


use App\Entity\Disc;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ArtistRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: ArtistRepository::class)]
class Artist
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $URL = null;

    #[ORM\OneToMany(mappedBy: 'artiste', targetEntity: Disc::class)]
    private Collection $discs;

    public function __construct()
    {
        $this->discs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }
    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getURL(): ?string
    {
        return $this->URL;
    }

    public function setURL(string $URL): static
    {
        $this->URL = $URL;

        return $this;
    }

    /**
     * @return Collection<int, Disc>
     */
    public function getDiscs(): Collection
    {
        return $this->discs;
    }

    public function addDisc(Disc $disc): static
    {
        if (!$this->discs->contains($disc)) {
            $this->discs->add($disc);
            $disc->setArtistId($this);
        }

        return $this;
    }
    public function removeDisc(Disc $disc): static
    {
        //  On vérifie si le disque $disc existe dans la collection $discs de l'artiste
        if ($this->discs->removeElement($disc)) {
            // Si le disque a été effectivement retiré, on poursuit
            // On vérifie si le côté propriétaire de la relation (dans ce cas, le côté Disc) a l'artiste actuel
            if ($disc->getArtistId() === $this) {
                // Si oui, on défini l'artiste du disque sur null
                $disc->setArtistId(null);
            }
        }

        return $this;
    }
}
