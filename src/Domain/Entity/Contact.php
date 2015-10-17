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
	 * @Column(name="phone", type="string", length=10, nullable=false)
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
	 * @Column(name="address", type="string", length=150, nullable=false)
	 */
	private $address;

	/**
	 * @OneToMany(targetEntity="Feedbacks", mappedBy="user", cascade={"persist", "remove"})
	 **/
	private $feedback;
	// ...

	public function __construct() {
		$this->feedback = new ArrayCollection();
	}

	public function getFeedback() {
		return $this->feedback;
	}


	public function getId()
	{
		return $this->id;
	}

	public function getPhone()
	{
		return $this->phone;
	}

	public function setPhone($phone)
	{
		$this->phone = $phone;

	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;

	}

	public function getCreatedAt()
	{
		return $this->createdAt;
	}

	public function setCreatedAt()
	{
		$this->createdAt = new \DateTime("now");
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}
}
