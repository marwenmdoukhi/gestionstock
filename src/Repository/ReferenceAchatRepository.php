<?php

namespace App\Repository;

use App\Entity\ReferenceAchat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReferenceAchat|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReferenceAchat|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReferenceAchat[]    findAll()
 * @method ReferenceAchat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReferenceAchatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReferenceAchat::class);
    }

    // /**
    //  * @return ReferenceAchat[] Returns an array of ReferenceAchat objects
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
    public function findOneBySomeField($value): ?ReferenceAchat
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
