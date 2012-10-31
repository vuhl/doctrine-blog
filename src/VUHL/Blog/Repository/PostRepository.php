<?php

namespace VUHL\Blog\Repository;

use Doctrine\ORM\EntityRepository;

class PostRepository extends EntityRepository
{
    const TEN_MOST_RECENT = "
        SELECT post from \VUHL\Blog\Entity\Post post
        ORDER BY post.date DESC
        ";

    public function getTenMostRecent()
    {
        $q = $this->getEntityManager()
            ->createQuery(self::TEN_MOST_RECENT);
        return $q->getResult();
    }
}
