<?php

namespace App\Repository;

use App\Entity\Contiens;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Contiens>
 *
 * @method Contiens|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contiens|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contiens[]    findAll()
 * @method Contiens[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContiensRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Contiens::class);
    }

//    /**
//     * @return Contiens[] Returns an array of Contiens objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Contiens
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
