<?php
// src/AppBundle/Entity/Publication.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PublicationRepository")
 */
class Publication
{

  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="type", type="string", length=255)
   */
  private $type;

  /**
   * @ORM\Column(name="pub", type="array")
   */
  private $pub;

  

  public function getId()
  {
    return $this->id;
  }


    /**
     * Set type
     *
     * @param string $type
     *
     * @return Publication
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

 

    /**
     * Set pub
     *
     * @param array $pub
     *
     * @return Publication
     */
    public function setPub($pub)
    {
        $this->pub = $pub;

        return $this;
    }

    /**
     * Get pub
     *
     * @return array
     */
    public function getPub()
    {
        return $this->pub;
    }
}
