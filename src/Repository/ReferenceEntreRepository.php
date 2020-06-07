<?php

namespace App\Repository;

use App\Entity\ReferenceEntre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReferenceEntre|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReferenceEntre|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReferenceEntre[]    findAll()
 * @method ReferenceEntre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReferenceEntreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReferenceEntre::class);
    }

    // /**
    //  * @return ReferenceEntre[] Returns an array of ReferenceEntre objects
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
    public function findOneBySomeField($value): ?ReferenceEntre
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
