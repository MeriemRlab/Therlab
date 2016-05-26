<?php
// src/AppBundle/DataFixtures/ORM/LoadNewsData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\News;
use AppBundle\entity\Image;

class LoadNewsData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
	    $repository = $manager ->getRepository('AppBundle:Image');
	    $images = array(
		$repository->findOneByUrl('images/media/news-1.jpg'),
		$repository->findOneByUrl('images/media/news-2.jpg'),
		$repository->findOneByUrl('images/media/news-3.jpg')	
	    );

	    $titles = array(
	      'EMBO Practical Course Light Sheet Microscopy',
	      'Systems Biology Lectures: Imaging Biological Systems',
	      'PloS paper'
            );

	    $contents = array(
	      'Once more we organized in Dresden a two weeks long course on all aspects of Light Sheet microscopy.',
	      'We will be teaching in Berlin early May and we will be giving the opening lecture of the course!',
	      'In this article we propose an end-to-end approach to estimate physical parameters of corals using low-cost equipment and freeware, allowing every 			community to participate in surveys and monitoring of their coral ecosystem. We demonstrate our approach on 9 species of underwater colonies in 		ranging size and morphology. 3D models of underwater colonies, fresh samples and bleached skeletons with high quality texture mapping and 			detailed topographic morphology were produced, and Surface Area and Volume measurements (parameters widely used for ecological and coral health 		studies) were calculated and analysed. Moreover, we integrated collected sample models with micro-photogrammetry models of individual 			corallitesto aid identification and colony and polyp scale analysis.'
            );
	    $links = array(
		'http://events.embo.org/16-lsm/',
		'https://www.mdc-berlin.de/40850357/en/research/themes/bimsb/Events/Systems-Biology-Lectures',	
		'http://journals.plos.org/plosone/article?id=10.1371/journal.pone.0149641'
            );

	    foreach ($titles as $index => $title) {
	      
	      $news = new News();
	      $news->setTitle($title);
	      $news->setContent($contents[$index]);
	      $news->setLink($links[$index]);
	      $news->setImage($images[$index]);

	      
	      $manager->persist($news);
	    }

	    
	    $manager->flush();
	    }
}
