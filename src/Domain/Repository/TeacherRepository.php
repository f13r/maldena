<?php
namespace Domain\Repository;

use Doctrine\ORM\EntityRepository;


class TeacherRepository extends EntityRepository {

	public function getActiveTeachers() {
		return $this->findBy([ 'active' => 1 ], [ 'sort' => 'ASC']);
	}
}