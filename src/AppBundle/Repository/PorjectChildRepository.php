<?php
// src/AppBundle/Repository/ProjectChildRepository.php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ProjectChildRepository extends EntityRepository
{
    public function findAllOrderedById()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:ProjectChild p ORDER BY p.id ASC'
            )
            ->getResult();
    }
}
