<?php

namespace App\Entity;

use App\Repository\AdminRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdminRepository::class)
 */
class Admin
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
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\ManyToMany(targetEntity=Mentor::class, inversedBy="admins")
     */
    private $mentor;

    /**
     * @ORM\ManyToOne(targetEntity=Competiton::class, inversedBy="admins")
     */
    private $competition;

    public function __construct()
    {
        $this->mentor = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return Collection|Mentor[]
     */
    public function getMentor(): Collection
    {
        return $this->mentor;
    }

    public function addMentor(Mentor $mentor): self
    {
        if (!$this->mentor->contains($mentor)) {
            $this->mentor[] = $mentor;
        }

        return $this;
    }

    public function removeMentor(Mentor $mentor): self
    {
        $this->mentor->removeElement($mentor);

        return $this;
    }

    public function getCompetition(): ?Competiton
    {
        return $this->competition;
    }

    public function setCompetition(?Competiton $competition): self
    {
        $this->competition = $competition;

        return $this;
    }
}
