<?php

namespace App\Repository;

use App\Entity\PvReception;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PvReception|null find($id, $lockMode = null, $lockVersion = null)
 * @method PvReception|null findOneBy(array $criteria, array $orderBy = null)
 * @method PvReception[]    findAll()
 * @method PvReception[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PvReceptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PvReception::class);
    }

    // /**
    //  * @return PvReception[] Returns an array of PvReception objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PvReception
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
