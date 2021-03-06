<?php

namespace App\Repository\General;

use App\Entity\General\Langue;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Langue|null find($id, $lockMode = null, $lockVersion = null)
 * @method Langue|null findOneBy(array $criteria, array $orderBy = null)
 * @method Langue[]    findAll()
 * @method Langue[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LangueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Langue::class);
	}

}
