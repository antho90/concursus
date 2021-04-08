<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\EquipeRepository;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass=EquipeRepository::class)
 * @UniqueEntity(
 * fields={"nom"},
 * message="Le nom que vous avez indiqué est déjà utilisé !"
 * )
 */

class Equipe 
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
     * @ORM\OneToMany(targetEntity=Mentor::class, mappedBy="equipe")
     */
    private $mentors;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $structure;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    public $validation;
    
    public $validationImage;

    /**
     * @ORM\ManyToMany(targetEntity=Competiton::class, mappedBy="equipe")
     * @ORM\JoinTable(name="competiton_equipe")
     */
    private $competitons;

    /**
     * @ORM\ManyToMany(targetEntity=GeneralUser::class, mappedBy="equipes")
     */
    private $generaluser;

    public function __construct()
    {
        $this->mentors = new ArrayCollection();
        $this->competitons = new ArrayCollection();
        $this->generaluser = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAcces(): ?string
    {
        return $this->acces;
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

    /**
     * @return Collection|Mentor[]
     */
    public function getMentors(): Collection
    {
        return $this->mentors;
    }

    public function addMentor(Mentor $mentor): self
    {
        if (!$this->mentors->contains($mentor)) {
            $this->mentors[] = $mentor;
            $mentor->setEquipe($this);
        }

        return $this;
    }

    public function removeMentor(Mentor $mentor): self
    {
        if ($this->mentors->removeElement($mentor)) {
            // set the owning side to null (unless already changed)
            if ($mentor->getEquipe() === $this) {
                $mentor->setEquipe(null);
            }
        }

        return $this;
    }

    public function getStructure(): ?string
    {
        return $this->structure;
    }

    public function setStructure(string $structure): self
    {
        $this->structure = $structure;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * @return Collection|Competiton[]
     */
    public function getCompetitons(): Collection
    {
        return $this->competitons;
    }

    public function addCompetiton(Competiton $competiton): self
    {
        if (!$this->competitons->contains($competiton)) {
            $this->competitons[] = $competiton;
            $competiton->addEquipe($this);
        }

        return $this;
    }

    public function removeCompetiton(Competiton $competiton): self
    {
        if ($this->competitons->removeElement($competiton)) {
            $competiton->removeEquipe($this);
        }

        return $this;
    }

    /**
     * @return Collection|GeneralUser[]
     */
    public function getGeneraluser(): Collection
    {
        return $this->generaluser;
    }

    public function setGeneraluser($generaluser): Collection
    {
        $this->generaluser = $generaluser;
        return $this->generaluser;
    }

    public function addGeneraluser(GeneralUser $generaluser): self
    {
        if (!$this->generaluser->contains($generaluser)) {
            $this->generaluser[] = $generaluser;
        }

        return $this;
    }

    public function removeGeneraluser(GeneralUser $generaluser): self
    {
        $this->generaluser->removeElement($generaluser);

        return $this;
    }
}
