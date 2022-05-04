<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * TicketLigne
 *
 * @ORM\Table(name="ticket_ligne", indexes={@ORM\Index(name="date", columns={"tkl__dt"}), @ORM\Index(name="ticket", columns={"tkl__tk_id"})})
 * @ORM\Entity
 */
#[ApiResource()]
class TicketLigne
{
    /**
     * @var int
     *
     * @ORM\Column(name="tkl__id", type="integer", nullable=false, options={"unsigned"=true,"comment"="ID de la ligne du ticket"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tklId;

    /**
     * @var int
     *
     * @ORM\Column(name="tkl__tk_id", type="smallint", nullable=false, options={"unsigned"=true,"comment"="ID du ticket"})
     */
    private $tklTkId;

    /**
     * @var int
     *
     * @ORM\Column(name="tkl__user_id", type="smallint", nullable=false, options={"unsigned"=true,"comment"="ID de l'utilisateur qui fait la ligne du ticket"})
     */
    private $tklUserId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tkl__dt", type="datetime", nullable=false, options={"comment"="Date Time de l'action"})
     */
    private $tklDt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tkl__motif_ligne", type="string", length=50, nullable=true, options={"comment"="Nom de l action ligne pour un motif"})
     */
    private $tklMotifLigne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tkl__memo", type="text", length=65535, nullable=true, options={"comment"="text de l'action"})
     */
    private $tklMemo;

    /**
     * @var int
     *
     * @ORM\Column(name="tkl__user_id_dest", type="smallint", nullable=false, options={"unsigned"=true,"comment"="ID user a qui c'est destiné"})
     */
    private $tklUserIdDest;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="tkl__visible", type="boolean", nullable=true, options={"comment"="Niveau de visibilité"})
     */
    private $tklVisible;

    public function getTklId(): ?int
    {
        return $this->tklId;
    }

    public function getTklTkId(): ?int
    {
        return $this->tklTkId;
    }

    public function setTklTkId(int $tklTkId): self
    {
        $this->tklTkId = $tklTkId;

        return $this;
    }

    public function getTklUserId(): ?int
    {
        return $this->tklUserId;
    }

    public function setTklUserId(int $tklUserId): self
    {
        $this->tklUserId = $tklUserId;

        return $this;
    }

    public function getTklDt(): ?\DateTimeInterface
    {
        return $this->tklDt;
    }

    public function setTklDt(\DateTimeInterface $tklDt): self
    {
        $this->tklDt = $tklDt;

        return $this;
    }

    public function getTklMotifLigne(): ?string
    {
        return $this->tklMotifLigne;
    }

    public function setTklMotifLigne(?string $tklMotifLigne): self
    {
        $this->tklMotifLigne = $tklMotifLigne;

        return $this;
    }

    public function getTklMemo(): ?string
    {
        return $this->tklMemo;
    }

    public function setTklMemo(?string $tklMemo): self
    {
        $this->tklMemo = $tklMemo;

        return $this;
    }

    public function getTklUserIdDest(): ?int
    {
        return $this->tklUserIdDest;
    }

    public function setTklUserIdDest(int $tklUserIdDest): self
    {
        $this->tklUserIdDest = $tklUserIdDest;

        return $this;
    }

    public function getTklVisible(): ?bool
    {
        return $this->tklVisible;
    }

    public function setTklVisible(?bool $tklVisible): self
    {
        $this->tklVisible = $tklVisible;

        return $this;
    }


}
