<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participe
 *
 * @ORM\Table(name="Participe")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ParticipeRepository")
 */
class Participe {

    /**
     * @var \Partie
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\ManyToOne(targetEntity="Partie", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPartie", referencedColumnName="idPartie")
     * })
     */
    private $idpartie;

    /**
     * @var \Joueur
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\ManyToOne(targetEntity="Joueur", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idLogin", referencedColumnName="id")
     * })
     */
    private $idlogin;

    /**
     * @var integer
     *
     * @ORM\Column(name="score", type="integer", nullable=true)
     */
    private $score;

    /**
     *
     * @var boolean
     * 
     * @ORM\Column(name="token", type="boolean", nullable=true)
     */
    private $token;

    /**
     *
     * @var boolean
     * 
     * @ORM\Column(name="pioche", type="boolean", nullable=true)
     */
    private $pioche;

    /**
     *
     * @var boolean
     * 
     * @ORM\Column(name="éliminé", type="boolean", nullable=true)
     */
    private $elimine;

    public function getIdpartie() {
        return $this->idpartie;
    }

    public function setIdpartie($p) {
        $this->idpartie = $p;

        return $this;
    }

    public function getIdlogin() {
        return $this->idlogin;
    }

    public function setIdlogin($l) {
        $this->idlogin = $l;

        return $this;
    }

    /**
     * Set score
     *
     * @param integer $score
     *
     * @return Joueur
     */
    public function setScore($score) {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return integer
     */
    public function getScore() {
        return $this->score;
    }

    public function setToken($token) {
        $this->token = $token;

        return $this;
    }

    public function getToken() {
        return $this->token;
    }

    public function setPioche($p) {
        $this->pioche = $p;

        return $this;
    }

    public function getPioche() {
        return $this->pioche;
    }

    public function setElimine($el) {
        $this->elimine = $el;

        return $this;
    }

    public function getElimine() {
        return $this->elimine;
    }

}
