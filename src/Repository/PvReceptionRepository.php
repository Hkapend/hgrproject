<?php

namespace App\Repository;

use App\Entity\PvReception;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\Exception;
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

    /**
     * @return PvReception[] Returns an array of PvReception objects
     * @throws \Doctrine\DBAL\Driver\Exception|Exception
     */
    public function findnumpv()
    {
        //$_request = $this->getEntityManager()->createQuery("SELECT DISTINCT(*) FROM App\Entity\PvReception a GROUP BY a.numpv");
        $_request = $this->getEntityManager()->getConnection()->prepare('SELECT DISTINCT `id`, `numpv`,`valeur`, `created_at` FROM `pv_reception` GROUP BY `numpv`');
        $_request->execute();
        return $_request->fetchAll();
    }

    /**
     * @param $_valeur
     * @return PvReception[] Returns an array of PvReception objects
     * @throws Exception
     * @throws \Doctrine\DBAL\Driver\Exception
     */
    public function find_detail($_valeur)
    {
        $_request = $this->getEntityManager()->getConnection()->prepare('
            SELECT `description`, `qte_recu`, `marque`,`pv_reception`.`created_at`, `pv_reception`.`observation`, `numpv` 
                FROM `pv_reception`, `materiels` 
                WHERE `valeur` = :_valeur AND `pv_reception`.`description_id`  = `materiels`.`id`
        ');
        $_request->execute(array('_valeur' => $_valeur));
        return $_request->fetchAll();
    }
}
