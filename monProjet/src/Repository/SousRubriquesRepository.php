<?php

namespace App\Repository;

use App\Entity\SousRubriques;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SousRubriques>
 *
 * @method SousRubriques|null find($id, $lockMode = null, $lockVersion = null)
 * @method SousRubriques|null findOneBy(array $criteria, array $orderBy = null)
 * @method SousRubriques[]    findAll()
 * @method SousRubriques[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SousRubriquesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SousRubriques::class);
    }

//    /**
//     * @return SousRubriques[] Returns an array of SousRubriques objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SousRubriques
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
