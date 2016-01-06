<?php

namespace Domain\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * Users
 *
 * @Table(name="users")
 * @Entity
 */
class User
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
     * @OneToMany(targetEntity="Feedback", mappedBy="user", cascade={"persist", "remove"})
     **/
    private $feedback;

    /**
     * @OneToMany(targetEntity="Answer", mappedBy="user", cascade={"persist", "remove"})
     **/
    private $answer;


    /**
     * @var string
     *
     * @Column(name="crmId", type="string", length=150, nullable=true)
     */
    private $crmId;

    public function __construct() {
        $this->feedback = new ArrayCollection();
        $this->answer = new ArrayCollection();
    }

    public function getFeedback() {
        return $this->feedback;
    }

    /**
     * @return mixed
     */
    public function getAnswer() {
        return $this->answer;
    }

    /**
     * @param mixed $answer
     */
    public function setAnswer($answer) {
        $this->answer = $answer;
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

    public function getCrmId() {
        return $this->crmId;
    }

    public function setCrmId($crmId) {
        $this->crmId = $crmId;
    }
}

