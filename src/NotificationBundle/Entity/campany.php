<?php

namespace NotificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * campany
 *
 * @ORM\Table(name="campany")
 * @ORM\Entity(repositoryClass="NotificationBundle\Repository\campanyRepository")
 */
class campany
{
    /**
     * @var int
     *
     * @ORM\Column(name="idcampany", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idcampany;

    /**
     * @var string
     *
     * @ORM\Column(name="name_campany", type="string", length=255)
     */
    private $nameCampany;

    /**
     * @return int
     */
    public function getIdcampany()
    {
        return $this->idcampany;
    }

    /**
     * @param int $idcampany
     */
    public function setIdcampany($idcampany)
    {
        $this->idcampany = $idcampany;
    }



    /**
     * Set nameCampany
     *
     * @param string $nameCampany
     *
     * @return campany
     */
    public function setNameCampany($nameCampany)
    {
        $this->nameCampany = $nameCampany;

        return $this;
    }

    /**
     * Get nameCampany
     *
     * @return string
     */
    public function getNameCampany()
    {
        return $this->nameCampany;
    }
}

