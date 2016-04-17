<?php
namespace Domain\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;


class TestRepository extends ActivityRepository {

	const SHOW_ROWS_IN_LIST = 10;

}