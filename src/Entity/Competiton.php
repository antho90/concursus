<?php

namespace App\Entity;

use App\Repository\CompetitonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass=CompetitonRepository::class)
 * @UniqueEntity(
 * fields={"nom"},
 * message="Le nom que vous avez indiqué est déjà utilisé !"
 * )
 */
class Competiton
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="array")
     */
    private $classement = [];

    /**
     * @ORM\OneToMany(targetEntity=Admin::class, mappedBy="competition")
     */
    private $admins;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $info;

    /**
     * @ORM\ManyToMany(targetEntity=Equipe::class, mappedBy="competitons")
     * @ORM\JoinTable(name="competiton_equipe")
     */
    private $equipe;

    public function __construct()
    {
        $this->admins = new ArrayCollection();
        $this->equipe = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function __toString()
    {
        return $this->getNom();
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getClassement(): ?array
    {
        return $this->classement;
    }

    public function setClassement(array $classement): self
    {
        $this->classement = $classement;

        return $this;
    }

    /**
     * @return Collection|Admin[]
     */
    public function getAdmins(): Collection
    {
        return $this->admins;
    }

    public function addAdmin(Admin $admin): self
    {
        if (!$this->admins->contains($admin)) {
            $this->admins[] = $admin;
            $admin->setCompetition($this);
        }

        return $this;
    }

    public function removeAdmin(Admin $admin): self
    {
        if ($this->admins->removeElement($admin)) {
            // set the owning side to null (unless already changed)
            if ($admin->getCompetition() === $this) {
                $admin->setCompetition(null);
            }
        }

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getInfo(): ?string
    {
        return $this->info;
    }

    public function setInfo(string $info): self
    {
        $this->info = $info;

        return $this;
    }

    /**
     * @return Collection|Equipe[]
     */
    public function getEquipe(): Collection
    {
        return $this->equipe;
    }

    public function setEquipe($equipe): Collection
    {
        $this->$equipe = $equipe;
        return $this->$equipe;
    }

    public function addEquipe(Equipe $equipe): self
    {
        if (!$this->equipe->contains($equipe)) {
            $this->equipe[] = $equipe;
        }

        return $this;
    }

    public function removeEquipe(Equipe $equipe): self
    {
        $this->equipe->removeElement($equipe);

        return $this;
    }
}
