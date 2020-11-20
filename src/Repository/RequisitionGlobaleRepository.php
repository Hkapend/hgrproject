<?php

namespace App\Repository;

use App\Entity\RequisitionGlobale;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RequisitionGlobale|null find($id, $lockMode = null, $lockVersion = null)
 * @method RequisitionGlobale|null findOneBy(array $criteria, array $orderBy = null)
 * @method RequisitionGlobale[]    findAll()
 * @method RequisitionGlobale[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RequisitionGlobaleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RequisitionGlobale::class);
    }

    // /**
    //  * @return RequisitionGlobale[] Returns an array of RequisitionGlobale objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RequisitionGlobale
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
