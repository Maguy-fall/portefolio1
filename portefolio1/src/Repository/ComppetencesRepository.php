<?php

namespace App\Repository;

use App\Entity\Comppetences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Comppetences|null find($id, $lockMode = null, $lockVersion = null)
 * @method Comppetences|null findOneBy(array $criteria, array $orderBy = null)
 * @method Comppetences[]    findAll()
 * @method Comppetences[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ComppetencesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Comppetences::class);
    }

    // /**
    //  * @return Comppetences[] Returns an array of Comppetences objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Comppetences
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
