<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * TicketLigneChamp
 *
 * @ORM\Table(name="ticket_ligne_champ")
 * @ORM\Entity
 */
#[ApiResource()]
class TicketLigneChamp
{
    /**
     * @var int
     *
     * @ORM\Column(name="tklc__id", type="integer", nullable=false, options={"unsigned"=true,"comment"="ID de la ligne du ticket"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tklcId;

    /**
     * @var string
     *
     * @ORM\Column(name="tklc__nom_champ", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tklcNomChamp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tklc__ordre", type="integer", nullable=true, options={"unsigned"=true,"comment"="Ordre d'affichage"})
     */
    private $tklcOrdre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tklc__memo", type="string", length=250, nullable=true, options={"comment"="memo pour ce champ complementaire"})
     */
    private $tklcMemo;

    public function getTklcId(): ?int
    {
        return $this->tklcId;
    }

    public function getTklcNomChamp(): ?string
    {
        return $this->tklcNomChamp;
    }

    public function getTklcOrdre(): ?int
    {
        return $this->tklcOrdre;
    }

    public function setTklcOrdre(?int $tklcOrdre): self
    {
        $this->tklcOrdre = $tklcOrdre;

        return $this;
    }

    public function getTklcMemo(): ?string
    {
        return $this->tklcMemo;
    }

    public function setTklcMemo(?string $tklcMemo): self
    {
        $this->tklcMemo = $tklcMemo;

        return $this;
    }


}
