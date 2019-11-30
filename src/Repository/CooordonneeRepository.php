<?php

namespace App\Repository;

use App\Entity\Cooordonnee;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Cooordonnee|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cooordonnee|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cooordonnee[]    findAll()
 * @method Cooordonnee[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CooordonneeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cooordonnee::class);
    }

    // /**
    //  * @return Cooordonnee[] Returns an array of Cooordonnee objects
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
    public function findOneBySomeField($value): ?Cooordonnee
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
