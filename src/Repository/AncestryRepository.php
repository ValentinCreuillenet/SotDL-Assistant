<?php

namespace App\Repository;

use App\Entity\Ancestry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ancestry|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ancestry|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ancestry[]    findAll()
 * @method Ancestry[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AncestryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ancestry::class);
    }

    // /**
    //  * @return Ancestry[] Returns an array of Ancestry objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ancestry
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
