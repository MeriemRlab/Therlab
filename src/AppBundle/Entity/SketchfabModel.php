<?php
// src/AppBundle/Entity/SketchfabModel.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SketchfabModelRepository")
 * @Vich\Uploadable
 */
class SketchfabModel
{

  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="name", type="string", length=255)
   */
  private $name;

   /**
   * @ORM\Column(name="author", type="string", length=255)
   */
  private $author;

  /**
   * @ORM\Column(name="description", type="text")
   */
  private $description;
  
     /**
     * @ORM\Column(name="model", type="string", length=255)
     */
   private $model;

     /**
     * @Vich\UploadableField(mapping="model_file", fileNameProperty="model")
     * @var File
     */
    private $modelFile;
  
   /**
   * @ORM\Column(name="tags", type="text")
   */
  private $tags;

  /**
   * @ORM\Column(name="modelId", type="string", length=255, nullable=true)
   */
  private $modelId;

 /**
   * @ORM\Column(name="date", type="datetime")
   */
  private $date;
 
  /**
   * @ORM\Column(name="model_quality", type="string", length=255)
   */
  private $model_quality;

  /**
   * @ORM\Column(name="model_size", type="string", length=255)
   */
  private $model_size;

  /**
   * @ORM\Column(name="3d_model_size", type="string", length=255)
   */
  private $model_3d_size;

 /**
   * @ORM\Column(name="disclaimer", type="text", nullable=true)
   */
  private $disclaimer;

  public function __construct()
      {
       $this->date = new \Datetime();
    
       }

    public function getAbsolutePath()
    {
        return null === $this->model
            ? null
            : $this->getUploadRootDir().'/'.$this->model;
    }
    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return '/home/meriem/therlab/web/'.$this->getUploadDir();
    }
   protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/models';
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
     * Set name
     *
     * @param string $name
     *
     * @return SketchfabModel
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return SketchfabModel
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
     * Set tags
     *
     * @param string $tags
     *
     * @return SketchfabModel
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return SketchfabModel
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

   public function setModelFile(File $model = null)
    {
        $this->modelFile = $model;

    }

    public function getModelFile()
    {
        return $this->modelFile;
    }

    /**
     * Set modelId
     *
     * @param string $modelId
     *
     * @return SketchfabModel
     */
    public function setModelId($modelId = null)
    {
        $this->modelId = $modelId;

        return $this;
    }

    /**
     * Get modelId
     *
     * @return string
     */
    public function getModelId()
    {
        return $this->modelId;
    }



    /**
     * Set author
     *
     * @param string $author
     *
     * @return SketchfabModel
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return SketchfabModel
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set modelQuality
     *
     * @param string $modelQuality
     *
     * @return SketchfabModel
     */
    public function setModelQuality($modelQuality)
    {
        $this->model_quality = $modelQuality;

        return $this;
    }

    /**
     * Get modelQuality
     *
     * @return string
     */
    public function getModelQuality()
    {
        return $this->model_quality;
    }

    /**
     * Set modelSize
     *
     * @param string $modelSize
     *
     * @return SketchfabModel
     */
    public function setModelSize($modelSize)
    {
        $this->model_size = $modelSize;

        return $this;
    }

    /**
     * Get modelSize
     *
     * @return string
     */
    public function getModelSize()
    {
        return $this->model_size;
    }

    /**
     * Set model3dSize
     *
     * @param string $model3dSize
     *
     * @return SketchfabModel
     */
    public function setModel3dSize($model3dSize)
    {
        $this->model_3d_size = $model3dSize;

        return $this;
    }

    /**
     * Get model3dSize
     *
     * @return string
     */
    public function getModel3dSize()
    {
        return $this->model_3d_size;
    }

    /**
     * Set disclaimer
     *
     * @param string $disclaimer
     *
     * @return SketchfabModel
     */
    public function setDisclaimer($disclaimer)
    {
        $this->disclaimer = $disclaimer;

        return $this;
    }

    /**
     * Get disclaimer
     *
     * @return string
     */
    public function getDisclaimer()
    {
        return $this->disclaimer;
    }
}
