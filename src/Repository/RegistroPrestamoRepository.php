<?php

namespace App\Repository;

use App\Entity\RegistroPrestamo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method RegistroPrestamo|null find($id, $lockMode = null, $lockVersion = null)
 * @method RegistroPrestamo|null findOneBy(array $criteria, array $orderBy = null)
 * @method RegistroPrestamo[]    findAll()
 * @method RegistroPrestamo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RegistroPrestamoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RegistroPrestamo::class);
    }

    // /**
    //  * @return RegistroPrestamo[] Returns an array of RegistroPrestamo objects
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
    public function findOneBySomeField($value): ?RegistroPrestamo
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
