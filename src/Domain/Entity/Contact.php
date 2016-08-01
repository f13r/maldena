<?php

namespace Domain\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * Users
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity
 */
class Contact
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
	 * @ORM\Column(name="phone", type="string", length=10, nullable=true)
	 */
	private $phone;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="phone2", type="string", length=10, nullable=true)
	 */
	private $phone2;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="email", type="string", length=150, nullable=true)
	 */
	private $email;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="city", type="string", length=150, nullable=false)
	 */
	private $city;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="skype", type="string", length=150, nullable=false)
	 */
	private $skype;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="address", type="string", length=150, nullable=false)
	 */
	private $address;

	/**
	 * @var string
	 * @ORM\Column(name="coordLat", type="string", length=150, nullable=false)
	 **/
	private $coordLat;

	/**
	 * @var string
	 * @ORM\Column(name="coordLng", type="string", length=150, nullable=false)
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

	public function getPhone2() {
		return $this->phone2;
	}

	public function setPhone2($phone2) {
		$this->phone2 = $phone2;

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

	public function formatPhone($phone) {
       return "(".substr($phone, 0, 3).") ".substr($phone, 3, 3)."-".substr($phone, 6, 2)."-".substr($phone, 8, 2);
	}

	public function getSchoolContacts() {

		return [
			'phone' => $this->formatPhone($this->getPhone()),
			'phone2' => $this->formatPhone($this->getPhone2()),
			'city' => $this->getCity(),
			'address' => $this->getAddress(),
			'email' => $this->getEmail(),
			'skype' => $this->getSkype()
		];
	}

}

