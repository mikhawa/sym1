<?php

namespace Michael\Test\MonOrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article", uniqueConstraints={@ORM\UniqueConstraint(name="leslug_UNIQUE", columns={"leslug"})})
 * @ORM\Entity
 */
class Article
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="letitre", type="string", length=100, nullable=true)
     */
    private $letitre;

    /**
     * @var string
     *
     * @ORM\Column(name="leslug", type="string", length=100, nullable=true)
     */
    private $leslug;

    /**
     * @var string
     *
     * @ORM\Column(name="letexte", type="text", length=65535, nullable=true)
     */
    private $letexte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ladate", type="datetime", nullable=true)
     */
    private $ladate;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Utilisateur", mappedBy="article")
     */
    private $utilisateur;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->utilisateur = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set letitre
     *
     * @param string $letitre
     *
     * @return Article
     */
    public function setLetitre($letitre)
    {
        $this->letitre = $letitre;

        return $this;
    }

    /**
     * Get letitre
     *
     * @return string
     */
    public function getLetitre()
    {
        return $this->letitre;
    }

    /**
     * Set leslug
     *
     * @param string $leslug
     *
     * @return Article
     */
    public function setLeslug($leslug)
    {
        $this->leslug = $leslug;

        return $this;
    }

    /**
     * Get leslug
     *
     * @return string
     */
    public function getLeslug()
    {
        return $this->leslug;
    }

    /**
     * Set letexte
     *
     * @param string $letexte
     *
     * @return Article
     */
    public function setLetexte($letexte)
    {
        $this->letexte = $letexte;

        return $this;
    }

    /**
     * Get letexte
     *
     * @return string
     */
    public function getLetexte()
    {
        return $this->letexte;
    }

    /**
     * Set ladate
     *
     * @param \DateTime $ladate
     *
     * @return Article
     */
    public function setLadate($ladate)
    {
        $this->ladate = $ladate;

        return $this;
    }

    /**
     * Get ladate
     *
     * @return \DateTime
     */
    public function getLadate()
    {
        return $this->ladate;
    }

    /**
     * Add utilisateur
     *
     * @param \Michael\Test\MonOrmBundle\Entity\Utilisateur $utilisateur
     *
     * @return Article
     */
    public function addUtilisateur(\Michael\Test\MonOrmBundle\Entity\Utilisateur $utilisateur)
    {
        $this->utilisateur[] = $utilisateur;

        return $this;
    }

    /**
     * Remove utilisateur
     *
     * @param \Michael\Test\MonOrmBundle\Entity\Utilisateur $utilisateur
     */
    public function removeUtilisateur(\Michael\Test\MonOrmBundle\Entity\Utilisateur $utilisateur)
    {
        $this->utilisateur->removeElement($utilisateur);
    }

    /**
     * Get utilisateur
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
}
