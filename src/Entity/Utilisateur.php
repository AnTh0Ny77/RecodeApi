<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", uniqueConstraints={@ORM\UniqueConstraint(name="alias", columns={"alias"}), @ORM\UniqueConstraint(name="email", columns={"email"})}, indexes={@ORM\Index(name="Nom", columns={"nom"}), @ORM\Index(name="Login", columns={"login"}), @ORM\Index(name="Prenom", columns={"prenom"})})
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_utilisateur", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUtilisateur = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom = '';

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=10, nullable=false)
     */
    private $login = '';

    /**
     * @var string
     *
     * @ORM\Column(name="password_user", type="string", length=255, nullable=false)
     */
    private $passwordUser = '';

    /**
     * @var string
     *
     * @ORM\Column(name="log_nec", type="string", length=20, nullable=false)
     */
    private $logNec = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=80, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alias", type="string", length=80, nullable=true, options={"comment"="Alias email pour signature"})
     */
    private $alias;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user__email_devis", type="string", length=200, nullable=true, options={"comment"="email simple, groupe ou double pour afficher sur devis"})
     */
    private $userEmailDevis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="postefix", type="string", length=15, nullable=true)
     */
    private $postefix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gsmperso", type="string", length=15, nullable=true)
     */
    private $gsmperso;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telperso", type="string", length=15, nullable=true)
     */
    private $telperso;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datenais", type="date", nullable=true)
     */
    private $datenais;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datearrive", type="date", nullable=true)
     */
    private $datearrive;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fonction", type="string", length=30, nullable=true)
     */
    private $fonction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail_sign_add", type="string", length=200, nullable=true)
     */
    private $mailSignAdd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="photo", type="string", length=50, nullable=true)
     */
    private $photo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="icone", type="string", length=50, nullable=true, options={"default"="NC.PNG","comment"="nom de l'icone de representation"})
     */
    private $icone = 'NC.PNG';

    /**
     * @var bool
     *
     * @ORM\Column(name="type_user", type="boolean", nullable=false, options={"default"="1","comment"="0:non actif 1:vendeur&tech 2:tech 3:vendeur 8:admin 9:debug"})
     */
    private $typeUser = true;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="t_com", type="boolean", nullable=true)
     */
    private $tCom = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="t_crm", type="boolean", nullable=true, options={"comment"="droit sur le modul crm 5 admin CRM - 3 MAJ tous comptes - 2 Visu tous comptes (mais pas de modif) - 1 MAJ Uniqement ses clients"})
     */
    private $tCrm = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="t_tech", type="boolean", nullable=true)
     */
    private $tTech = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="t_in", type="boolean", nullable=true)
     */
    private $tIn = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="t_art", type="boolean", nullable=true, options={"comment"="droit pour les maj articles"})
     */
    private $tArt = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="t_prix", type="boolean", nullable=true, options={"comment"="droit pour voir les prix achat 0= pas de visu 1=visu 2=modif"})
     */
    private $tPrix = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="t_dp", type="boolean", nullable=true, options={"comment"="demande de prix"})
     */
    private $tDp = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="t_heure", type="boolean", nullable=true, options={"comment"="demande heure trav 0=non 1=oui 8=admin"})
     */
    private $tHeure = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="po_ref_sp", type="boolean", nullable=true, options={"comment"="Types affichaged des ref (0=avec - et 1 =sans -)"})
     */
    private $poRefSp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="po_valid", type="smallint", nullable=true)
     */
    private $poValid;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="po_acheteur", type="boolean", nullable=true)
     */
    private $poAcheteur = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="id_euronet", type="string", length=20, nullable=true, options={"comment"="id euronet pour les alertes (avec , si plusieurs **GRP**)"})
     */
    private $idEuronet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user__level", type="smallint", nullable=true, options={"unsigned"=true,"comment"="Niveau User 0=inactif,5=groupe non visible,10=groupe, 50=User"})
     */
    private $userLevel = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="user__devis_acces", type="smallint", nullable=true, options={"unsigned"=true,"comment"="accès a la partie devis "})
     */
    private $userDevisAcces = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="user__cmd_acces", type="smallint", nullable=true, options={"unsigned"=true,"comment"="accès à la partie commande"})
     */
    private $userCmdAcces = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="user__saisie_acces", type="smallint", nullable=true, options={"unsigned"=true,"comment"="accès à la partie saisie "})
     */
    private $userSaisieAcces = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="user__admin_acces", type="smallint", nullable=true, options={"unsigned"=true,"comment"="accès à la partie admin"})
     */
    private $userAdminAcces = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="user__facture_acces", type="smallint", nullable=true, options={"unsigned"=true,"comment"="Droits acces Facturation"})
     */
    private $userFactureAcces = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="user__ticket_acces", type="smallint", nullable=true, options={"unsigned"=true,"comment"="Droits acces Tikets"})
     */
    private $userTicketAcces = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="user__matos_acces", type="smallint", nullable=true, options={"unsigned"=true,"comment"="Droits sur catalogue FMM + PN 10=visu 20=maj PN 30=maj FMM 90=admin"})
     */
    private $userMatosAcces = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="user__prix_acces", type="smallint", nullable=false, options={"unsigned"=true,"comment"="0 si l'utilisateur n'a pas d'accès au prix , 10 à le droit à une consultation , 20 prix d'achats , 30 modification des prix d'achats "})
     */
    private $userPrixAcces = '0';

    public function getIdUtilisateur(): ?int
    {
        return $this->idUtilisateur;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getPasswordUser(): ?string
    {
        return $this->passwordUser;
    }

    public function setPasswordUser(string $passwordUser): self
    {
        $this->passwordUser = $passwordUser;

        return $this;
    }

    public function getLogNec(): ?string
    {
        return $this->logNec;
    }

    public function setLogNec(string $logNec): self
    {
        $this->logNec = $logNec;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAlias(): ?string
    {
        return $this->alias;
    }

    public function setAlias(?string $alias): self
    {
        $this->alias = $alias;

        return $this;
    }

    public function getUserEmailDevis(): ?string
    {
        return $this->userEmailDevis;
    }

    public function setUserEmailDevis(?string $userEmailDevis): self
    {
        $this->userEmailDevis = $userEmailDevis;

        return $this;
    }

    public function getPostefix(): ?string
    {
        return $this->postefix;
    }

    public function setPostefix(?string $postefix): self
    {
        $this->postefix = $postefix;

        return $this;
    }

    public function getGsmperso(): ?string
    {
        return $this->gsmperso;
    }

    public function setGsmperso(?string $gsmperso): self
    {
        $this->gsmperso = $gsmperso;

        return $this;
    }

    public function getTelperso(): ?string
    {
        return $this->telperso;
    }

    public function setTelperso(?string $telperso): self
    {
        $this->telperso = $telperso;

        return $this;
    }

    public function getDatenais(): ?\DateTimeInterface
    {
        return $this->datenais;
    }

    public function setDatenais(?\DateTimeInterface $datenais): self
    {
        $this->datenais = $datenais;

        return $this;
    }

    public function getDatearrive(): ?\DateTimeInterface
    {
        return $this->datearrive;
    }

    public function setDatearrive(?\DateTimeInterface $datearrive): self
    {
        $this->datearrive = $datearrive;

        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(?string $fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }

    public function getMailSignAdd(): ?string
    {
        return $this->mailSignAdd;
    }

    public function setMailSignAdd(?string $mailSignAdd): self
    {
        $this->mailSignAdd = $mailSignAdd;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getIcone(): ?string
    {
        return $this->icone;
    }

    public function setIcone(?string $icone): self
    {
        $this->icone = $icone;

        return $this;
    }

    public function getTypeUser(): ?bool
    {
        return $this->typeUser;
    }

    public function setTypeUser(bool $typeUser): self
    {
        $this->typeUser = $typeUser;

        return $this;
    }

    public function getTCom(): ?bool
    {
        return $this->tCom;
    }

    public function setTCom(?bool $tCom): self
    {
        $this->tCom = $tCom;

        return $this;
    }

    public function getTCrm(): ?bool
    {
        return $this->tCrm;
    }

    public function setTCrm(?bool $tCrm): self
    {
        $this->tCrm = $tCrm;

        return $this;
    }

    public function getTTech(): ?bool
    {
        return $this->tTech;
    }

    public function setTTech(?bool $tTech): self
    {
        $this->tTech = $tTech;

        return $this;
    }

    public function getTIn(): ?bool
    {
        return $this->tIn;
    }

    public function setTIn(?bool $tIn): self
    {
        $this->tIn = $tIn;

        return $this;
    }

    public function getTArt(): ?bool
    {
        return $this->tArt;
    }

    public function setTArt(?bool $tArt): self
    {
        $this->tArt = $tArt;

        return $this;
    }

    public function getTPrix(): ?bool
    {
        return $this->tPrix;
    }

    public function setTPrix(?bool $tPrix): self
    {
        $this->tPrix = $tPrix;

        return $this;
    }

    public function getTDp(): ?bool
    {
        return $this->tDp;
    }

    public function setTDp(?bool $tDp): self
    {
        $this->tDp = $tDp;

        return $this;
    }

    public function getTHeure(): ?bool
    {
        return $this->tHeure;
    }

    public function setTHeure(?bool $tHeure): self
    {
        $this->tHeure = $tHeure;

        return $this;
    }

    public function getPoRefSp(): ?bool
    {
        return $this->poRefSp;
    }

    public function setPoRefSp(?bool $poRefSp): self
    {
        $this->poRefSp = $poRefSp;

        return $this;
    }

    public function getPoValid(): ?int
    {
        return $this->poValid;
    }

    public function setPoValid(?int $poValid): self
    {
        $this->poValid = $poValid;

        return $this;
    }

    public function getPoAcheteur(): ?bool
    {
        return $this->poAcheteur;
    }

    public function setPoAcheteur(?bool $poAcheteur): self
    {
        $this->poAcheteur = $poAcheteur;

        return $this;
    }

    public function getIdEuronet(): ?string
    {
        return $this->idEuronet;
    }

    public function setIdEuronet(?string $idEuronet): self
    {
        $this->idEuronet = $idEuronet;

        return $this;
    }

    public function getUserLevel(): ?int
    {
        return $this->userLevel;
    }

    public function setUserLevel(?int $userLevel): self
    {
        $this->userLevel = $userLevel;

        return $this;
    }

    public function getUserDevisAcces(): ?int
    {
        return $this->userDevisAcces;
    }

    public function setUserDevisAcces(?int $userDevisAcces): self
    {
        $this->userDevisAcces = $userDevisAcces;

        return $this;
    }

    public function getUserCmdAcces(): ?int
    {
        return $this->userCmdAcces;
    }

    public function setUserCmdAcces(?int $userCmdAcces): self
    {
        $this->userCmdAcces = $userCmdAcces;

        return $this;
    }

    public function getUserSaisieAcces(): ?int
    {
        return $this->userSaisieAcces;
    }

    public function setUserSaisieAcces(?int $userSaisieAcces): self
    {
        $this->userSaisieAcces = $userSaisieAcces;

        return $this;
    }

    public function getUserAdminAcces(): ?int
    {
        return $this->userAdminAcces;
    }

    public function setUserAdminAcces(?int $userAdminAcces): self
    {
        $this->userAdminAcces = $userAdminAcces;

        return $this;
    }

    public function getUserFactureAcces(): ?int
    {
        return $this->userFactureAcces;
    }

    public function setUserFactureAcces(?int $userFactureAcces): self
    {
        $this->userFactureAcces = $userFactureAcces;

        return $this;
    }

    public function getUserTicketAcces(): ?int
    {
        return $this->userTicketAcces;
    }

    public function setUserTicketAcces(?int $userTicketAcces): self
    {
        $this->userTicketAcces = $userTicketAcces;

        return $this;
    }

    public function getUserMatosAcces(): ?int
    {
        return $this->userMatosAcces;
    }

    public function setUserMatosAcces(?int $userMatosAcces): self
    {
        $this->userMatosAcces = $userMatosAcces;

        return $this;
    }

    public function getUserPrixAcces(): ?int
    {
        return $this->userPrixAcces;
    }

    public function setUserPrixAcces(int $userPrixAcces): self
    {
        $this->userPrixAcces = $userPrixAcces;

        return $this;
    }


}
