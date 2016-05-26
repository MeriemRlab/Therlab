<?php
// src/AppBundle/Repository/BlaschkaRepository.php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class BlaschkaRepository extends EntityRepository
{
    public function findAllOrderedById()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT b FROM AppBundle:Blaschka b ORDER BY b.id ASC'
            )
            ->getResult();
    }
}
