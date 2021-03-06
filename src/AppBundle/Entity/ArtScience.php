<?php
// src/AppBundle/Entity/ArtScience.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArtScienceRepository")
 */
class ArtScience extends Project
{

   /**
   * @ORM\Column(name="artists", type="array")
   */
  private $artists;

   /**
   * @ORM\Column(name="website",  type="string", length=255)
   */
  private $website;


    /**
     * Set artists
     *
     * @param array $artists
     *
     * @return ArtScience
     */
    public function setArtists($artists)
    {
        $this->artists = $artists;

        return $this;
    }

    /**
     * Get artists
     *
     * @return array
     */
    public function getArtists()
    {
        return $this->artists;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return ArtScience
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }
}
