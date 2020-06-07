<?php

namespace App\Repository;

use App\Entity\Magazin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Magazin|null find($id, $lockMode = null, $lockVersion = null)
 * @method Magazin|null findOneBy(array $criteria, array $orderBy = null)
 * @method Magazin[]    findAll()
 * @method Magazin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MagazinRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Magazin::class);
    }

    // /**
    //  * @return Magazin[] Returns an array of Magazin objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Magazin
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
