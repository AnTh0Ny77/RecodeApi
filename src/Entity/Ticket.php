<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket")
 * @ORM\Entity
 */
#[ApiResource()]
class Ticket
{
    /**
     * @var int
     *
     * @ORM\Column(name="tk__id", type="integer", nullable=false, options={"unsigned"=true,"comment"="ID du ticket"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tkId;

    /**
     * @var string
     *
     * @ORM\Column(name="tk__motif", type="string", length=3, nullable=false, options={"fixed"=true,"comment"="motif ouverture ticket (keyword) (id, po, soc, cmd, hard...)"})
     */
    private $tkMotif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tk__motif_id", type="string", length=50, nullable=true, options={"comment"="ID en raport avec le motif (qui paut etre un varchar ex : pn)"})
     */
    private $tkMotifId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tk__titre", type="string", length=250, nullable=true)
     */
    private $tkTitre;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="tk__lu", type="boolean", nullable=true, options={"comment"="Etat de lecture par user_id_dest  0=lu 1=a lire"})
     */
    private $tkLu = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tk__indic", type="string", length=3, nullable=true, options={"fixed"=true,"comment"="Indicateur d'etat (urgent, repair, info, groupe...) (keyword:TINDIC)"})
     */
    private $tkIndic;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tk__groupe", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $tkGroupe;

    public function getTkId(): ?int
    {
        return $this->tkId;
    }

    public function getTkMotif(): ?string
    {
        return $this->tkMotif;
    }

    public function setTkMotif(string $tkMotif): self
    {
        $this->tkMotif = $tkMotif;

        return $this;
    }

    public function getTkMotifId(): ?string
    {
        return $this->tkMotifId;
    }

    public function setTkMotifId(?string $tkMotifId): self
    {
        $this->tkMotifId = $tkMotifId;

        return $this;
    }

    public function getTkTitre(): ?string
    {
        return $this->tkTitre;
    }

    public function setTkTitre(?string $tkTitre): self
    {
        $this->tkTitre = $tkTitre;

        return $this;
    }

    public function getTkLu(): ?bool
    {
        return $this->tkLu;
    }

    public function setTkLu(?bool $tkLu): self
    {
        $this->tkLu = $tkLu;

        return $this;
    }

    public function getTkIndic(): ?string
    {
        return $this->tkIndic;
    }

    public function setTkIndic(?string $tkIndic): self
    {
        $this->tkIndic = $tkIndic;

        return $this;
    }

    public function getTkGroupe(): ?int
    {
        return $this->tkGroupe;
    }

    public function setTkGroupe(?int $tkGroupe): self
    {
        $this->tkGroupe = $tkGroupe;

        return $this;
    }


}
