<?php

namespace App\Repository;

use App\Entity\RefrenceVente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RefrenceVente|null find($id, $lockMode = null, $lockVersion = null)
 * @method RefrenceVente|null findOneBy(array $criteria, array $orderBy = null)
 * @method RefrenceVente[]    findAll()
 * @method RefrenceVente[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RefrenceVenteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RefrenceVente::class);
    }

    // /**
    //  * @return RefrenceVente[] Returns an array of RefrenceVente objects
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
    public function findOneBySomeField($value): ?RefrenceVente
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
