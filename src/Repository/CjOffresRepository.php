<?php

namespace App\Repository;

use App\Entity\CjOffres;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CjOffres|null find($id, $lockMode = null, $lockVersion = null)
 * @method CjOffres|null findOneBy(array $criteria, array $orderBy = null)
 * @method CjOffres[]    findAll()
 * @method CjOffres[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CjOffresRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CjOffres::class);
    }

//    /**
//     * @return CjOffres[] Returns an array of CjOffres objects
//     */
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
    public function findOneBySomeField($value): ?CjOffres
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
