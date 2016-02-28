<?php
namespace Domain\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;
use Domain\Entity\User;


class UserRepository extends EntityRepository {

	public function getUserByEmailOrPhone($contacts) {

		/**
		 * @var User $user
		 */
		$user = null;

		if (isset($contacts['email']) && filter_var($contacts['email'], FILTER_VALIDATE_EMAIL)) {
			$user = $this->findOneByEmail($contacts['email']);
		}

		if (isset($contacts['phone']) && is_numeric($contacts['phone']) && strlen((string) $contacts['phone']) == 10) {
			$user = $this->findOneByPhone($contacts['phone']);
		}

		return $user;

	}
}