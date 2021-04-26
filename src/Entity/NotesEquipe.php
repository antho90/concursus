<?php

namespace App\Entity;

use App\Repository\NotesEquipeRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass=NotesEquipeRepository::class)
 * @ORM\Table(name="competiton_equipe")
 */
class NotesEquipe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Equipe", inversedBy="competitons")
     * @ORM\JoinColumn(nullable=false)
     */
    private $equipe;

    /**
     * @ORM\ManyToOne(targetEntity="Competiton", inversedBy="equipe")
     * @ORM\JoinColumn(nullable=false)
     */
    private $competiton;

    /**
     * @ORM\Column(type="integer")
     */
    private $notes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEquipe()
    {
        return $this->equipe;
    }
    public function setEquipe($equipe)
    {
        $this->equipe = $equipe;
    }

    public function getCompetiton()
    {
        return $this->competiton;
    }
    public function setCompetiton($competiton)
    {
        $this->competiton = $competiton;
    }

    public function getNotes()
    {
        return $this->notes;
    }
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }
}
