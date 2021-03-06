<?php
// src/AppBundle/EventListener/ModelListener.php
namespace AppBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use AppBundle\Entity\SketchfabModel;

class ModelListener
{
    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        // only act on some "Product" entity
        if (!$entity instanceof SketchfabModel) {
            return;
        }

        $entityManager = $args->getEntityManager();
        

        $name = $entity->getName();
    	$description = $entity->getDescription();
    	$file = $entity->getAbsolutePath();
    	$tags = $entity->getTags();

    	$params = array(
    	"name" => $name,
    	"description" => $description,
    	"modelFile" => new \CurlFile($file),
    	"token" => '904ce0bdc18d4068abb58d0b066228ff',
    	"tags" => $tags,
    	"private" => 1
     	);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,true); 
	curl_setopt($ch, CURLOPT_URL, "https://api.sketchfab.com/v2/models");
	$result = curl_exec($ch);
	if($result === false)
	  echo curl_error($ch); 
	 else{
		$json = json_decode($result, true);
		$modelId = $json['uid'];
		$entity->setModelId($modelId);
		}
	
    }
}
