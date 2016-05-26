<?php
// src/AppBundle/Entity/Comment.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommentRepository")
 */
class Comment
{

  /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Post")
   * @ORM\JoinColumn(nullable=false)
   */
  private $post;

  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="first_name", type="string", length=255)
   */
  private $firstName;

  /**
   * @ORM\Column(name="last_name", type="string", length=255)
   */
  private $lastName;
  
  
     /**
     * @ORM\Column(name="email", type="string", length=255)
     */
  private $email;
  
   /**
   * @ORM\Column(name="content", type="text")
   */
  private $content;
  
 

 
  public function getId()
  {
    return $this->id;
  }

	public function getFirstName()
  {
    return $this->firstName;
  }
  
  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;

    return $this;
  }

  public function getLastName()
  {
    return $this->lastName;
  }
  
  public function setLastName($lastName)
  {
    $this->lastName = $lastName;

    return $this;
  }
  
  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  public function getEmail()
  {
    return $this->email;
  }
  
  public function setContent($content)
  {
    $this->content = $content;

    return $this;
  }

  public function getContent()
  {
    return $this->content;
  }

  

    /**
     * Set post
     *
     * @param \AppBundle\Entity\Post $post
     *
     * @return Comment
     */
    public function setPost(\AppBundle\Entity\Post $post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return \AppBundle\Entity\Post
     */
    public function getPost()
    {
        return $this->post;
    }

}
