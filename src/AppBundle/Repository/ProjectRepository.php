<?php
// src/AppBundle/Repository/ProjectRepository.php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ProjectRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Project p ORDER BY p.id ASC'
            )
            ->getResult();
    }
}
