<?php
// src/AppBundle/Repository/PublicationRepository.php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PublicationRepository extends EntityRepository
{
    public function findAllOrderedById()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Publication p ORDER BY p.id ASC'
            )
            ->getResult();
    }
}
