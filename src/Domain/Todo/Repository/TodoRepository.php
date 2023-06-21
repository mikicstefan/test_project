<?php

namespace App\Domain\Todo\Repository;

use App\Core\Doctrine\Repository\BaseRepository;
use App\Domain\Todo\Entity\Todo;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Todo|null find($id, $lockMode = null, $lockVersion = null)
 * @method Todo|null findOneBy(array $criteria, array $orderBy = null)
 * @method Todo[]    findAll()
 * @method Todo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TodoRepository extends BaseRepository
{
  public function __construct(ManagerRegistry $registry)
  {
    parent::__construct($registry, Todo::class);
  }

  /**
   * @return Todo[]
   */
  public function findByTitle(?string $title): iterable
  {
    return $this->createQueryBuilder('t')
      ->andWhere('t.title = :title')
      ->setParameter('title', $title)
      ->getQuery()
      ->getResult();
  }

}
