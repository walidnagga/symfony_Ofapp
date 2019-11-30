<?php

namespace App\Repository;

use App\Entity\IdGeo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method IdGeo|null find($id, $lockMode = null, $lockVersion = null)
 * @method IdGeo|null findOneBy(array $criteria, array $orderBy = null)
 * @method IdGeo[]    findAll()
 * @method IdGeo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IdGeoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IdGeo::class);
    }

    // /**
    //  * @return IdGeo[] Returns an array of IdGeo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?IdGeo
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
