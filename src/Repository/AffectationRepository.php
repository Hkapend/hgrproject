<?php

namespace App\Repository;

use App\Entity\Affectation;
use App\Entity\PvReception;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\Exception;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Affectation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Affectation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Affectation[]    findAll()
 * @method Affectation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AffectationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Affectation::class);
    }

    // /**
    //  * @return Affectation[] Returns an array of Affectation objects
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
    public function findOneBySomeField($value): ?Affectation
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * @return Affectation[] Returns an array of PvReception objects
     * @throws \Doctrine\DBAL\Driver\Exception|Exception
     */
    public function findnumaffect()
    {
        //$_request = $this->getEntityManager()->createQuery("SELECT DISTINCT(*) FROM App\Entity\PvReception a GROUP BY a.numpv");
        $_request = $this->getEntityManager()->getConnection()->prepare('SELECT DISTINCT `id`, `num_affectation`,`valeur`, `created_at` FROM `affectation` GROUP BY `num_affectation`');
        $_request->execute();
        return $_request->fetchAll();
    }


    /**
     * @param $_valeur
     * @return PvReception[] Returns an array of PvReception objects
     * @throws Exception
     * @throws \Doctrine\DBAL\Driver\Exception
     */
    public function find_affectation($_valeur)
    {
        $_request = $this->getEntityManager()->getConnection()->prepare('
            SELECT `materiels`.`description` AS descript, `qte`, `affectation`.`created_at`, `affectation`.`observation`, `num_affectation` ,`service`.`description` 
            FROM `affectation`, `materiels` ,`service` 
            WHERE `valeur` = :_valeur AND `affectation`.`materiel_id` = `materiels`.`id` AND `service`.`id` = `affectation`.`service_id`
        ');
        $_request->execute(array('_valeur' => $_valeur));
        return $_request->fetchAll();
    }

}
