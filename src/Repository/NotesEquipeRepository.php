<?php

namespace App\Repository;

use App\Entity\NotesEquipe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NotesEquipe|null find($id, $lockMode = null, $lockVersion = null)
 * @method NotesEquipe|null findOneBy(array $criteria, array $orderBy = null)
 * @method NotesEquipe[]    findAll()
 * @method NotesEquipe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NotesEquipeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NotesEquipe::class);
    }

    // /**
    //  * @return NotesEquipe[] Returns an array of NotesEquipe objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NotesEquipe
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
