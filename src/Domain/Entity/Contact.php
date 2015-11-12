<?php

namespace Domain\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * Users
 *
 * @Table(name="contact")
 * @Entity
 */
class Contact
{
	/**
	 * @var integer
	 *
	 * @Column(name="id", type="integer", nullable=false)
	 * @Id
	 * @GeneratedValue(strategy="IDENTITY")
	 */
	private $id;

	/**
	 * @var string
	 *
	 * @Column(name="phone", type="string", length=10, nullable=true)
	 */
	private $phone;

	/**
	 * @var string
	 *
	 * @Column(name="email", type="string", length=150, nullable=true)
	 */
	private $email;

	/**
	 * @var string
	 *
	 * @Column(name="city", type="string", length=150, nullable=false)
	 */
	private $city;

	/**
	 * @var string
	 *
	 * @Column(name="skype", type="string", length=150, nullable=false)
	 */
	private $skype;

	/**
	 * @var string
	 *
	 * @Column(name="address", type="string", length=150, nullable=false)
	 */
	private $address;

	/**
	 * @var string
	 * @Column(name="coordLat", type="string", length=150, nullable=false)
	 **/
	private $coordLat;

	/**
	 * @var string
	 * @Column(name="coordLng", type="string", length=150, nullable=false)
	 **/
	private $coordLng;


	public function getId() {
		return $this->id;
	}

	public function getPhone() {
		return $this->phone;
	}

	public function setPhone($phone) {
		$this->phone = $phone;

	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;

	}

	/**
	 * @return string
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * @param string $city
	 */
	public function setCity($city) {
		$this->city = $city;
	}

	/**
	 * @return string
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * @param string $address
	 */
	public function setAddress($address) {
		$this->address = $address;
	}

	/**
	 * @return string
	 */
	public function getCoordLat() {
		return $this->coordLat;
	}

	/**
	 * @param string $coordLat
	 */
	public function setCoordLat($coordLat) {
		$this->coordLat = $coordLat;
	}

	/**
	 * @return string
	 */
	public function getCoordLng() {
		return $this->coordLng;
	}

	/**
	 * @param string $coordLng
	 */
	public function setCoordLng($coordLng) {
		$this->coordLng = $coordLng;
	}

	/**
	 * @return string
	 */
	public function getSkype() {
		return $this->skype;
	}

	/**
	 * @param string $skype
	 */
	public function setSkype($skype) {
		$this->skype = $skype;
	}



}

