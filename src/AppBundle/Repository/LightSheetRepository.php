<?php
// src/AppBundle/Repository/LightSheetRepository.php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class LightSheetRepository extends EntityRepository
{
    public function findAllOrderedById()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT l FROM AppBundle:LightSheet l ORDER BY l.id ASC'
            )
            ->getResult();
    }
}
