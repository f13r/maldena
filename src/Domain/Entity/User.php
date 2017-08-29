<?php

namespace Domain\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Acl\Exception\Exception;

/**
 * Users
 *
 * @ORM\Entity(repositoryClass="Domain\Repository\UserRepository")
 * @ORM\Table(name="users")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 */
class User {

    CONST CONTACT_TYPE_PHONE = 'phone';
    CONST CONTACT_TYPE_EMAIL = 'email';

	const ROLE_USER = 0;
    const ROLE_TEACHER = 1;
	const ROLE_ADMIN = 2;

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
     * @ORM\Column(name="phone", type="string", length=20, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=150, nullable=true)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt = NULL;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=150, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="userCrmId", type="string", length=150, nullable=true)
     */
    private $userCrmId;

    /**
     * @var int
	 *
     * @ORM\Column(name="role", type="integer", length=150, nullable=true)
     */
    private $role;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="photo", type="string", length=300, nullable=true)
	 */
	private $photo;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="facebook", type="string", length=150, nullable=true)
	 */
	private $facebook;


    public function __construct() {
    	$this->role = self::ROLE_USER;
    }

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

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function setCreatedAt($dateTime) {
    	$dateTime = !empty($dateTime) ? $dateTime : new \DateTime("now");
        $this->createdAt = $dateTime;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getUserCrmId() {
        return $this->userCrmId;
    }

    /**
     * @param mixed $userCrmId
     */
    public function setUserCrmId($userCrmId) {
        $this->userCrmId = $userCrmId;
    }

    /**
     * @ORM\PrePersist
     */
    public function onPrePersist() {
        $this->setCreatedAt(new \DateTime("now"));
    }

    /**
     * @return string
     */
    public function getRole() {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole($role) {
        $this->role = $role;
    }

	/**
	 * @return string
	 */
	public function getFacebook() {
		return $this->facebook;
	}

	/**
	 * @param string $facebook
	 */
	public function setFacebook($facebook) {
		$this->facebook = $facebook;
	}

	/**
	 * @return string
	 */
	public function getPhoto() {
		return $this->photo;
	}

	/**
	 * @param string $photo
	 */
	public function setPhoto($photo) {
		$this->photo = $photo;
	}

}

