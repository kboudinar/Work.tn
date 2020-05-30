<?php

namespace NotificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Candidat
 *
 * @ORM\Table(name="candidat")
 * @ORM\Entity(repositoryClass="NotificationBundle\Repository\CandidatRepository")
 */
class Candidat
{
    /**
     * @var int
     *
     * @ORM\Column(name="idcandidat", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idcandidat;

    /**
     * @var string
     *
     * @ORM\Column(name="name_candidat", type="string", length=255)
     */
    private $nameCandidat;

    /**
     * @return int
     */
    public function getIdcandidat()
    {
        return $this->idcandidat;
    }

    /**
     * @param int $idcandidat
     */
    public function setIdcandidat($idcandidat)
    {
        $this->idcandidat = $idcandidat;
    }


    /**
     * Get idcandidat
     *
     * @return int
     */


    /**
     * Set nameCandidat
     *
     * @param string $nameCandidat
     *
     * @return Candidat
     */
    public function setNameCandidat($nameCandidat)
    {
        $this->nameCandidat = $nameCandidat;

        return $this;
    }

    /**
     * Get nameCandidat
     *
     * @return string
     */
    public function getNameCandidat()
    {
        return $this->nameCandidat;
    }
}

