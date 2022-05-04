<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UtilisateurGrp
 *
 * @ORM\Table(name="utilisateur_grp")
 * @ORM\Entity
 */
class UtilisateurGrp
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_groupe", type="smallint", nullable=false, options={"unsigned"=true,"comment"="Id du groupe d'utilisateur"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idGroupe;

    /**
     * @var int
     *
     * @ORM\Column(name="id_utilisateur", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idUtilisateur = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Info", type="string", length=100, nullable=true, options={"comment"="Commentaire "})
     */
    private $info;

    public function getIdGroupe(): ?int
    {
        return $this->idGroupe;
    }

    public function getIdUtilisateur(): ?int
    {
        return $this->idUtilisateur;
    }

    public function getInfo(): ?string
    {
        return $this->info;
    }

    public function setInfo(?string $info): self
    {
        $this->info = $info;

        return $this;
    }


}
