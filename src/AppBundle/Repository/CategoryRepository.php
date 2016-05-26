<?php
// src/AppBundle/Repository/CategoryRepository.php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CategoryRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c FROM AppBundle:Category c ORDER BY c.name ASC'
            )
            ->getResult();
    }
}
