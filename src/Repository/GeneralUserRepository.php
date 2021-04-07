<?php

namespace App\Repository;

use App\Entity\GeneralUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GeneralUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method GeneralUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method GeneralUser[]    findAll()
 * @method GeneralUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GeneralUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GeneralUser::class);
    }

    // public function findByMentor(): array
    // {
    //     // return $this->createQueryBuilder('u')
    //         // ->innerJoin('u.equipe_general_user', 'WHERE', 'id= general_user_id')
    //         // ->orderBy('u.nom', 'ASC')
    //         $entityManager = $this->getEntityManager();

    //         $query = $entityManager->createQuery(
    //             'SELECT *
    //             FROM `general_user`
    //             INNER JOIN equipe_general_user
    //             WHERE id= general_user_id'
    //         )

    //         return $query->getResult();
    //         // ->getQuery()
    //         // ->execute()
    //     ;
    // }



    // /**
    //  * @return GeneralUser[] Returns an array of GeneralUser objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GeneralUser
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
