<?php
// src/AppBundle/Entity/ProjectChild.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjectChildRepository")
 */
class ProjectChild extends Project
{

  /**
   * @ORM\Column(name="members", type="array")
   */
  private $members;

   /**
   * @ORM\Column(name="colaborators", type="array")
   */
  private $collaborators;




    /**
     * Set members
     *
     * @param array $members
     *
     * @return ProjectChild
     */
    public function setMembers($members)
    {
        $this->members = $members;

        return $this;
    }

    /**
     * Get members
     *
     * @return array
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Set collaborators
     *
     * @param array $collaborators
     *
     * @return ProjectChild
     */
    public function setCollaborators($collaborators)
    {
        $this->collaborators = $collaborators;

        return $this;
    }

    /**
     * Get collaborators
     *
     * @return array
     */
    public function getCollaborators()
    {
        return $this->collaborators;
    }
}
