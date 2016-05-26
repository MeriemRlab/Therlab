<?php
// src/AppBundle/DataFixtures/ORM/LoadImageData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;

class LoadImageData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Liste des noms de catégorie à ajouter
    $alts = array(
      'Archeology',
      'Arkimeos',
      'Art and Science',
      'Invisible',
      'mara',
      'mocafico-blaschka',
      'Inhale',
      'salmon-lost',
      'souffle-par-mer'
          );
    $urls = array(
      'images/artProjects/archeology.jpg',
      'images/artProjects/arkimeos.jpg',
      'images/artProjects/invisible.jpg',
      'images/artProjects/mara.jpg',
      'images/artProjects/mocafico-blaschka.jpg',
      'images/artProjects/art-and-science.jpg',
      'images/artProjects/inhale.jpg',
      'images/artProjects/salmon-lost.jpg',
      'images/artProjects/souffle-par-mer-lost.jpg',
          );

    foreach ($alts as $index => $alt) {
      
      $image = new Image();
      $image->setAlt($alt);
      $image->setUrl($urls[$index]);

      
      $manager->persist($image);
    }

    
    $manager->flush();
    }
}
