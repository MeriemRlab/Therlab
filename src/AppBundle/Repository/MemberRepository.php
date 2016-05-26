<?php
// src/AppBundle/Repository/MemberRepository.php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class MemberRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT m FROM AppBundle:Member m ORDER BY m.id ASC'
            )
            ->getResult();
    }
}
