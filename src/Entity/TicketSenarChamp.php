<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * TicketSenarChamp
 *
 * @ORM\Table(name="ticket_senar_champ")
 * @ORM\Entity
 */
#[ApiResource(
    itemOperations: [
        'get' => [
            'pagination_enabeld' => false,
            'method' => 'get',

        ]
    ],
    collectionOperations: [
        'get' => [
            'pagination_enabeld' => false,
            'method' => 'get',
        ]
    ]
)]
class TicketSenarChamp
{
    /**
     * @var int
     *
     * @ORM\Column(name="tksc__id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tkscId;

    /**
     * @var string
     *
     * @ORM\Column(name="tksc__motif_ligne", type="string", length=50, nullable=false, options={"comment"="nom de l'action pour une ligne"})
     */
    private $tkscMotifLigne = '';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="tksc__ordre", type="boolean", nullable=true, options={"comment"="ordre d'affichage"})
     */
    private $tkscOrdre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tksc__type_de_champ", type="string", length=3, nullable=true, options={"fixed"=true,"comment"="txt, nombre, date...."})
     */
    private $tkscTypeDeChamp;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="tksc__long_de_champ", type="boolean", nullable=true, options={"comment"="long max "})
     */
    private $tkscLongDeChamp;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="tksc__obligatoire", type="boolean", nullable=true, options={"comment"="obligatoire ou pas (1=obligatoire)"})
     */
    private $tkscObligatoire = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tksc__nom_champ", type="string", length=100, nullable=true, options={"comment"="le has tag"})
     */
    private $tkscNomChamp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tksc__label", type="string", length=100, nullable=true, options={"comment"="nom literale du champs"})
     */
    private $tkscLabel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tksc__fa_champ", type="string", length=50, nullable=true, options={"comment"="Font awsome de ce champ pour affichage"})
     */
    private $tkscFaChamp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tksc__option", type="string", length=250, nullable=true, options={"comment"="Info complementaire sur les tables"})
     */
    private $tkscOption;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="tksc__sujet", type="boolean", nullable=true, options={"comment"="Sujet pricipale du ticket (pour affichage en evidence) (1 si principal une foir par senar max)"})
     */
    private $tkscSujet = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tksc__visible", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $tkscVisible = '0';

    public function getTkscId(): ?int
    {
        return $this->tkscId;
    }

    public function getTkscMotifLigne(): ?string
    {
        return $this->tkscMotifLigne;
    }

    public function setTkscMotifLigne(string $tkscMotifLigne): self
    {
        $this->tkscMotifLigne = $tkscMotifLigne;

        return $this;
    }

    public function getTkscOrdre(): ?bool
    {
        return $this->tkscOrdre;
    }

    public function setTkscOrdre(?bool $tkscOrdre): self
    {
        $this->tkscOrdre = $tkscOrdre;

        return $this;
    }

    public function getTkscTypeDeChamp(): ?string
    {
        return $this->tkscTypeDeChamp;
    }

    public function setTkscTypeDeChamp(?string $tkscTypeDeChamp): self
    {
        $this->tkscTypeDeChamp = $tkscTypeDeChamp;

        return $this;
    }

    public function getTkscLongDeChamp(): ?bool
    {
        return $this->tkscLongDeChamp;
    }

    public function setTkscLongDeChamp(?bool $tkscLongDeChamp): self
    {
        $this->tkscLongDeChamp = $tkscLongDeChamp;

        return $this;
    }

    public function getTkscObligatoire(): ?bool
    {
        return $this->tkscObligatoire;
    }

    public function setTkscObligatoire(?bool $tkscObligatoire): self
    {
        $this->tkscObligatoire = $tkscObligatoire;

        return $this;
    }

    public function getTkscNomChamp(): ?string
    {
        return $this->tkscNomChamp;
    }

    public function setTkscNomChamp(?string $tkscNomChamp): self
    {
        $this->tkscNomChamp = $tkscNomChamp;

        return $this;
    }

    public function getTkscLabel(): ?string
    {
        return $this->tkscLabel;
    }

    public function setTkscLabel(?string $tkscLabel): self
    {
        $this->tkscLabel = $tkscLabel;

        return $this;
    }

    public function getTkscFaChamp(): ?string
    {
        return $this->tkscFaChamp;
    }

    public function setTkscFaChamp(?string $tkscFaChamp): self
    {
        $this->tkscFaChamp = $tkscFaChamp;

        return $this;
    }

    public function getTkscOption(): ?string
    {
        return $this->tkscOption;
    }

    public function setTkscOption(?string $tkscOption): self
    {
        $this->tkscOption = $tkscOption;

        return $this;
    }

    public function getTkscSujet(): ?bool
    {
        return $this->tkscSujet;
    }

    public function setTkscSujet(?bool $tkscSujet): self
    {
        $this->tkscSujet = $tkscSujet;

        return $this;
    }

    public function getTkscVisible(): ?int
    {
        return $this->tkscVisible;
    }

    public function setTkscVisible(int $tkscVisible): self
    {
        $this->tkscVisible = $tkscVisible;

        return $this;
    }


}
