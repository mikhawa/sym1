<?php

namespace Michael\Test\MonOrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", uniqueConstraints={@ORM\UniqueConstraint(name="lelogin_UNIQUE", columns={"lelogin"})}, indexes={@ORM\Index(name="fk_utilisateur_droit_idx", columns={"droit_id"})})
 * @ORM\Entity
 */
class Utilisateur
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
     * @ORM\Column(name="lelogin", type="string", length=60, nullable=true)
     */
    private $lelogin;

    /**
     * @var string
     *
     * @ORM\Column(name="lepass", type="string", length=60, nullable=true)
     */
    private $lepass;

    /**
     * @var string
     *
     * @ORM\Column(name="lemail", type="string", length=100, nullable=true)
     */
    private $lemail;

    /**
     * @var \Droit
     *
     * @ORM\ManyToOne(targetEntity="Droit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="droit_id", referencedColumnName="id")
     * })
     */
    private $droit;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Article", inversedBy="utilisateur")
     * @ORM\JoinTable(name="utilisateur_has_article",
     *   joinColumns={
     *     @ORM\JoinColumn(name="utilisateur_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     *   }
     * )
     */
    private $article;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->article = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set lelogin
     *
     * @param string $lelogin
     *
     * @return Utilisateur
     */
    public function setLelogin($lelogin)
    {
        $this->lelogin = $lelogin;

        return $this;
    }

    /**
     * Get lelogin
     *
     * @return string
     */
    public function getLelogin()
    {
        return $this->lelogin;
    }

    /**
     * Set lepass
     *
     * @param string $lepass
     *
     * @return Utilisateur
     */
    public function setLepass($lepass)
    {
        $this->lepass = $lepass;

        return $this;
    }

    /**
     * Get lepass
     *
     * @return string
     */
    public function getLepass()
    {
        return $this->lepass;
    }

    /**
     * Set lemail
     *
     * @param string $lemail
     *
     * @return Utilisateur
     */
    public function setLemail($lemail)
    {
        $this->lemail = $lemail;

        return $this;
    }

    /**
     * Get lemail
     *
     * @return string
     */
    public function getLemail()
    {
        return $this->lemail;
    }

    /**
     * Set droit
     *
     * @param \Michael\Test\MonOrmBundle\Entity\Droit $droit
     *
     * @return Utilisateur
     */
    public function setDroit(\Michael\Test\MonOrmBundle\Entity\Droit $droit = null)
    {
        $this->droit = $droit;

        return $this;
    }

    /**
     * Get droit
     *
     * @return \Michael\Test\MonOrmBundle\Entity\Droit
     */
    public function getDroit()
    {
        return $this->droit;
    }

    /**
     * Add article
     *
     * @param \Michael\Test\MonOrmBundle\Entity\Article $article
     *
     * @return Utilisateur
     */
    public function addArticle(\Michael\Test\MonOrmBundle\Entity\Article $article)
    {
        $this->article[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \Michael\Test\MonOrmBundle\Entity\Article $article
     */
    public function removeArticle(\Michael\Test\MonOrmBundle\Entity\Article $article)
    {
        $this->article->removeElement($article);
    }

    /**
     * Get article
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticle()
    {
        return $this->article;
    }
}
