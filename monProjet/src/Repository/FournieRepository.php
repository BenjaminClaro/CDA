<?php

namespace App\Repository;

use App\Entity\Fournie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Fournie>
 *
 * @method Fournie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fournie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fournie[]    findAll()
 * @method Fournie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FournieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fournie::class);
    }

//    /**
//     * @return Fournie[] Returns an array of Fournie objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Fournie
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
