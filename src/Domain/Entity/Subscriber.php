<?php

namespace Domain\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Entity()
 * @ORM\Table(name="subscribers")
 */
class Subscriber {

    const STATUS_DO_NOT_SEND_EMAIL = 0;
    const STATUS_SEND_EMAIL = 1;

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
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;


    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=150, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="sending_status", type="smallint", options={"default":0}, nullable=true)
     */
    private $sendingStatus = 0;

	/**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getSendingStatus() {
        return $this->sendingStatus;
    }

    /**
     * @param string $sendingStatus
     */
    public function setSendingStatus($sendingStatus) {
        $this->sendingStatus = $sendingStatus;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

	/**
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

	/**
     * @param $email
     */
    public function setEmail($email) {
        $this->email = $email;

    }
}

