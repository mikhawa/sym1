<?php

namespace Michael\Test\MonOrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Droit
 *
 * @ORM\Table(name="droit")
 * @ORM\Entity
 */
class Droit
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
     * @var integer
     *
     * @ORM\Column(name="ledroit", type="integer", nullable=true)
     */
    private $ledroit;

    /**
     * @var string
     *
     * @ORM\Column(name="lintitule", type="string", length=60, nullable=true)
     */
    private $lintitule;



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
     * Set ledroit
     *
     * @param integer $ledroit
     *
     * @return Droit
     */
    public function setLedroit($ledroit)
    {
        $this->ledroit = $ledroit;

        return $this;
    }

    /**
     * Get ledroit
     *
     * @return integer
     */
    public function getLedroit()
    {
        return $this->ledroit;
    }

    /**
     * Set lintitule
     *
     * @param string $lintitule
     *
     * @return Droit
     */
    public function setLintitule($lintitule)
    {
        $this->lintitule = $lintitule;

        return $this;
    }

    /**
     * Get lintitule
     *
     * @return string
     */
    public function getLintitule()
    {
        return $this->lintitule;
    }
}
