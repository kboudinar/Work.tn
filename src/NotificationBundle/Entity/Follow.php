<?php

namespace NotificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Follow
 *
 * @ORM\Table(name="Follow", indexes={@ORM\Index(name="idfollow", columns={"idfollow", "idcampany", "idcandidat"}), @ORM\Index(name="idcampany", columns={"idcampany"}), @ORM\Index(name="idcandidat", columns={"idcandidat"})})
 * @ORM\Entity
 */
class Follow
{
    /**
     * @var int
     *
     * @ORM\Column(name="idfollow", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idfollow;

    /**
     * @return \campany
     */
    public function getIdcampany()
    {
        return $this->idcampany;
    }

    /**
     * @param \campany $idcampany
     */
    public function setIdcampany($idcampany)
    {
        $this->idcampany = $idcampany;
    }
    /**
     * @var \campany
     *
     * @ORM\ManyToOne(targetEntity="campany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcampany", referencedColumnName="idcampany")
     * })
     */
    private $idcampany;

    /**
     * @var \Candidat
     *
     * @ORM\ManyToOne(targetEntity="Candidat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcandidat", referencedColumnName="idcandidat")
     * })
     */
    private $idcandidat;


    /**
     * @return int
     */
    public function getIdfollow()
    {
        return $this->idfollow;
    }

    /**
     * @param int $idfollow
     */
    public function setIdfollow($idfollow)
    {
        $this->idfollow = $idfollow;
    }

    /**
     * @return \Candidat
     */
    public function getIdcandidat()
    {
        return $this->idcandidat;
    }

    /**
     * @param \Candidat $idcandidat
     */
    public function setIdcandidat($idcandidat)
    {
        $this->idcandidat = $idcandidat;
    }


    /**
     * Get id
     *
     * @return int
     */

}

