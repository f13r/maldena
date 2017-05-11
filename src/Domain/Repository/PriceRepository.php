<?php
namespace Domain\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;
use Domain\Entity\Price;


class PriceRepository extends EntityRepository {

	public function getPricesByContactId($contactId) {

		$prices = [];

		/**
		 * @var Price $price
		 */
		foreach ($this->findBy(['contact' => $contactId]) as $price) {
			$prices[$price->getType()] = [
				'cost' => $price->getCost(),
				'currency' => $price->getCurrency()
			];
		}

		return $prices;
	}
}