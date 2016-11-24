<?php

namespace MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Album
 */
class Album
{

    public function __toString()
    {
        return $this->titreAlbum;
    }

    //GENERATED CODE//


    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titreAlbum;

    /**
     * @var string
     */
    private $artiste;

    /**
     * @var string
     */
    private $genre;

    /**
     * @var string
     */
    private $support;

    /**
     * @var \MediaBundle\Entity\Album
     */
    private $commentaires;

    /**
     * @var \MediaBundle\Entity\Image
     */
    private $image;


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
     * Set titreAlbum
     *
     * @param string $titreAlbum
     * @return Album
     */
    public function setTitreAlbum($titreAlbum)
    {
        $this->titreAlbum = $titreAlbum;

        return $this;
    }

    /**
     * Get titreAlbum
     *
     * @return string 
     */
    public function getTitreAlbum()
    {
        return $this->titreAlbum;
    }

    /**
     * Set artiste
     *
     * @param string $artiste
     * @return Album
     */
    public function setArtiste($artiste)
    {
        $this->artiste = $artiste;

        return $this;
    }

    /**
     * Get artiste
     *
     * @return string 
     */
    public function getArtiste()
    {
        return $this->artiste;
    }

    /**
     * Set genre
     *
     * @param string $genre
     * @return Album
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set support
     *
     * @param string $support
     * @return Album
     */
    public function setSupport($support)
    {
        $this->support = $support;

        return $this;
    }

    /**
     * Get support
     *
     * @return string 
     */
    public function getSupport()
    {
        return $this->support;
    }

    /**
     * Set commentaires
     *
     * @param \MediaBundle\Entity\Album $commentaires
     * @return Album
     */
    public function setCommentaires(\MediaBundle\Entity\Album $commentaires = null)
    {
        $this->commentaires = $commentaires;

        return $this;
    }

    /**
     * Get commentaires
     *
     * @return \MediaBundle\Entity\Album 
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Set image
     *
     * @param \MediaBundle\Entity\Image $image
     * @return Album
     */
    public function setImage(\MediaBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \MediaBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }
}
