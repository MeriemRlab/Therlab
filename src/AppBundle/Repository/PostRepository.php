<?php
// src/AppBundle/Repository/PostRepository.php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class PostRepository extends EntityRepository
{
  public function getPosts($page, $nbPerPage, $categoryId)
  {

    if (null === $categoryId)
    {
     $query = $this->createQueryBuilder('a')
      // Jointure sur l'attribut image
      ->leftJoin('a.image', 'i')
      ->addSelect('i')
      // Jointure sur l'attribut categories
      ->leftJoin('a.categories', 'c')
      ->addSelect('c')
      ->orderBy('a.created_at', 'DESC')
      ->getQuery()
    ;
    }
     
    else
    {
    $query = $this->createQueryBuilder('a')
      // Jointure sur l'attribut image
      ->leftJoin('a.image', 'i')
      ->addSelect('i')
      // Jointure sur l'attribut categories
      ->leftJoin('a.categories', 'c')
      ->where('c.id = :category')
      ->setParameter('category', $categoryId)
      ->addSelect('c')
      ->orderBy('a.created_at', 'DESC')
      ->getQuery()
    ;
    }

     $query
      // On définit l'annonce à partir de laquelle commencer la liste
      ->setFirstResult(($page-1) * $nbPerPage)
      // Ainsi que le nombre d'annonce à afficher sur une page
      ->setMaxResults($nbPerPage)
    ;

    // Enfin, on retourne l'objet Paginator correspondant à la requête construite
    // (n'oubliez pas le use correspondant en début de fichier)
    return new Paginator($query, true);

  }

  public function findIdsOrderedById()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p.id FROM AppBundle:Post p ORDER BY p.id ASC'
            )
            ->getResult();
    }
}
