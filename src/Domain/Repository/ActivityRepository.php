<?php
namespace Domain\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Tools\Pagination\Paginator;


class ActivityRepository extends EntityRepository {

	/**
	 * Paginator Helper
	 *
	 * @param Doctrine\ORM\Query $dql   DQL Query Object
	 * @return \Doctrine\ORM\Tools\Pagination\Paginator
	 */
	public function paginate($dql) {
		return new Paginator($dql, false);
	}


	/**
	 * @param integer $currentPage The current page (passed from controller)
	 * @return \Doctrine\ORM\Tools\Pagination\Paginator
	 */
	public function getAllPaginatedPosts($currentPage = 1) {
		// Create our query
		$query = $this->createQueryBuilder('p')
			->where('p.deletedAt is null')
			->orderBy('p.createdAt', 'DESC')
			->setFirstResult(static::SHOW_ROWS_IN_LIST * ($currentPage - 1)) // Offset
			->setMaxResults(static::SHOW_ROWS_IN_LIST) // Limit
			->getQuery();

		return $this->paginate($query, $currentPage);
	}

	public function getQuantityOfUncheckedRows() {

		// Create our query
		$query = $this->createQueryBuilder('p')
			->where('p.deletedAt is null')
			->andWhere('p.status = 0')
			->getQuery();

		return count($query->getArrayResult());
	}
}