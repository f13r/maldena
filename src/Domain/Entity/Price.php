<?php

namespace Domain\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Users
 *
 * @ORM\Entity(repositoryClass="Domain\Repository\PriceRepository")
 * @ORM\Table(name="price")
 */
class Price
{
	/**
	 * @var integer
	 *
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="type", type="string", length=150, nullable=true)
	 */
	private $type;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="currency", type="string", length=10, nullable=true)
	 */
	private $currency;

	/**
	 * @var int
	 *
	 * @ORM\Column(name="cost", type="integer", nullable=true)
	 */
	private $cost;

	/**
	 * @ORM\ManyToOne(targetEntity="Contact", cascade={"persist"})
	 * @ORM\JoinColumn(name="contact_id", referencedColumnName="id")
	 **/
	private $contact;


	public function getId() {
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * @param string $type
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * @return string
	 */
	public function getCurrency() {
		return $this->currency;
	}

	/**
	 * @param string $currency
	 */
	public function setCurrency($currency) {
		$this->currency = $currency;
	}

	/**
	 * @return mixed
	 */
	public function getContact() {
		return $this->contact;
	}

	/**
	 * @param mixed $contact
	 */
	public function setContact($contact) {
		$this->contact = $contact;
	}

	/**
	 * @return mixed
	 */
	public function getCost() {
		return $this->cost;
	}

	/**
	 * @param mixed $cost
	 */
	public function setCost($cost) {
		$this->cost = $cost;
	}
}

