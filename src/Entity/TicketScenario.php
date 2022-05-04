<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
#[ApiResource(
    itemOperations: [
        'get' => [
            'pagination_enabeld' => false,
            'method' => 'get',
            
        ]
    ],collectionOperations: [
        'get' => [
            'pagination_enabeld' => false,
            'method' => 'get',
        ]
    ]
)]
/**
 * TicketScenario
 *
 * @ORM\Table(name="ticket_scenario")
 * @ORM\Entity
 */
class TicketScenario
{
    /**
     * @var int
     *
     * @ORM\Column(name="tks__id", type="integer", nullable=false, options={"unsigned"=true,"comment"="ID Ticket Sénario"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tksId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tks__motif", type="string", length=3, nullable=true, options={"fixed"=true,"comment"="Motif ticket (Keyword tmoti)"})
     */
    private $tksMotif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tks__motif_ligne", type="string", length=50, nullable=true, options={"comment"="Nom de l action ligne pour un motif"})
     */
    private $tksMotifLigne;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="tks__ordre", type="boolean", nullable=true, options={"default"="1","comment"="Ordre affichage"})
     */
    private $tksOrdre = true;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tks__lib", type="string", length=255, nullable=true, options={"comment"="Libelle de l'action"})
     */
    private $tksLib;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tks__a_qui", type="integer", nullable=true, options={"unsigned"=true,"comment"="A qui pour passer l action (individu ou groupe ou liste)"})
     */
    private $tksAQui;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tks__motif_ligne_preced", type="string", length=50, nullable=true, options={"comment"="motif_ligne precedente, DEBUT pour debut, ALL pour permanent"})
     */
    private $tksMotifLignePreced = '';

    /**
     * @var int
     *
     * @ORM\Column(name="tks__bis", type="integer", nullable=false, options={"unsigned"=true,"comment"="a qui ca sert ???"})
     */
    private $tksBis = '0';

    public function getTksId(): ?int
    {
        return $this->tksId;
    }

    public function getTksMotif(): ?string
    {
        return $this->tksMotif;
    }

    public function setTksMotif(?string $tksMotif): self
    {
        $this->tksMotif = $tksMotif;

        return $this;
    }

    public function getTksMotifLigne(): ?string
    {
        return $this->tksMotifLigne;
    }

    public function setTksMotifLigne(?string $tksMotifLigne): self
    {
        $this->tksMotifLigne = $tksMotifLigne;

        return $this;
    }

    public function getTksOrdre(): ?bool
    {
        return $this->tksOrdre;
    }

    public function setTksOrdre(?bool $tksOrdre): self
    {
        $this->tksOrdre = $tksOrdre;

        return $this;
    }

    public function getTksLib(): ?string
    {
        return $this->tksLib;
    }

    public function setTksLib(?string $tksLib): self
    {
        $this->tksLib = $tksLib;

        return $this;
    }

    public function getTksAQui(): ?int
    {
        return $this->tksAQui;
    }

    public function setTksAQui(?int $tksAQui): self
    {
        $this->tksAQui = $tksAQui;

        return $this;
    }

    public function getTksMotifLignePreced(): ?string
    {
        return $this->tksMotifLignePreced;
    }

    public function setTksMotifLignePreced(?string $tksMotifLignePreced): self
    {
        $this->tksMotifLignePreced = $tksMotifLignePreced;

        return $this;
    }

    public function getTksBis(): ?int
    {
        return $this->tksBis;
    }

    public function setTksBis(int $tksBis): self
    {
        $this->tksBis = $tksBis;

        return $this;
    }


}
