<?php
// src/AppBundle/Entity/Project.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjectRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"project" = "Project", "projectChild" = "ProjectChild", "artScience" = "ArtScience", "blaschka" = "Blaschka", "light_sheet" = "LightSheet"})
 */
class Project
{
  
  /**
   * @ORM\OneToOne(targetEntity="AppBundle\Entity\Image", cascade={"persist", "remove"})
   * @ORM\JoinColumn(name="image_id", referencedColumnName="id")
   */
  private $image;

  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="title", type="string", length=255)
   */
  private $title;

  /**
   * @ORM\Column(name="description", type="text")
   */
  private $description;

  

  public function getId()
  {
    return $this->id;
  }

 
   public function __toString() 
    {

      return "id = ". $this->id ;

    }

   

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Project
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Project
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }



    /**
     * Set image
     *
     * @param \AppBundle\Entity\Image $image
     *
     * @return Project
     */
    public function setImage(\AppBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \AppBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }
}
