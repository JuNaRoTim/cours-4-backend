<?php

namespace App\Repository;

use App\Entity\BraveGnome;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BraveGnome>
 *
 * @method BraveGnome|null find($id, $lockMode = null, $lockVersion = null)
 * @method BraveGnome|null findOneBy(array $criteria, array $orderBy = null)
 * @method BraveGnome[]    findAll()
 * @method BraveGnome[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BraveGnomeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BraveGnome::class);
    }

//    /**
//     * @return BraveGnome[] Returns an array of BraveGnome objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?BraveGnome
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
