<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Photo
 *
 * @ORM\Table(name="photo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PhotoRepository")
 */
class Photo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true, unique=true)
     */
    private $path;

    /**
     * @ORM\ManyToOne(targetEntity="Advert", inversedBy="photos")
     * @ORM\JoinColumn(name="advert_id", referencedColumnName="id", nullable = true)
     */

    private $advert;


    /**
     *
     * @Assert\NotBlank()
     */
    private $photo;


    /**
     * Get description
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set description
     *
     * @param string $photo
     * @return Advert
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
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
     * Set path
     *
     * @param string $path
     * @return Photo
     */
    public function setPath($path)
    {
        $this->route = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set advert
     *
     * @param \AppBundle\Entity\Advert $advert
     * @return Photo
     */
    public function setAdvert(\AppBundle\Entity\Advert $advert)
    {
        $this->advert = $advert;

        return $this;
    }

    /**
     * Get advert
     *
     * @return \AppBundle\Entity\Advert 
     */
    public function getAdvert()
    {
        return $this->advert;
    }
}
