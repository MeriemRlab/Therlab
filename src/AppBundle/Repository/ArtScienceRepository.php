<?php
// src/AppBundle/Repository/ArtScienceRepository.php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ArtScienceRepository extends EntityRepository
{
    public function findAllOrderedById()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:ArtScience p ORDER BY p.id ASC'
            )
            ->getResult();
    }
}
