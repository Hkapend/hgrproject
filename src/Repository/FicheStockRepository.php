<?php

namespace App\Repository;

use App\Entity\FicheStock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FicheStock|null find($id, $lockMode = null, $lockVersion = null)
 * @method FicheStock|null findOneBy(array $criteria, array $orderBy = null)
 * @method FicheStock[]    findAll()
 * @method FicheStock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FicheStockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FicheStock::class);
    }

    // /**
    //  * @return FicheStock[] Returns an array of FicheStock objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FicheStock
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
