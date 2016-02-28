<?php

namespace Domain\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Acl\Exception\Exception;

/**
 * Users
 *
 * @Entity(repositoryClass="Domain\Repository\UserRepository")
 * @Table(name="users")
 * @HasLifecycleCallbacks
 */
class User {

    CONST CONTACT_TYPE_PHONE = 'phone';
    CONST CONTACT_TYPE_EMAIL = 'email';

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
     * @var \DateTime
     *
     * @Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt = NULL;

    /**
     * @var string
     *
     * @Column(name="name", type="string", length=150, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @Column(name="userCrmId", type="string", length=150, nullable=true)
     */
    private $userCrmId;

    public function __construct() {

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

    public function setCreatedAt() {
        $this->createdAt = new \DateTime("now");
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
    public function getActivity() {
        return $this->activity;
    }

    /**
     * @param mixed $activity
     */
    public function setActivity($activity) {
        $this->activity = $activity;
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
     * @PrePersist
     */
    public function onPrePersist() {
        $this->setCreatedAt(new \DateTime("now"));
    }


}

