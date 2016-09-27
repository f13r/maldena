<?php

namespace Domain\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Users
 *
 * @ORM\Entity(repositoryClass="Domain\Repository\ActivityRepository")
 * @ORM\Table(name="activities")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\HasLifecycleCallbacks
 */
class Activity {

    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt = NULL;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt = NULL;

    /**
     * @var string
     *
     * @ORM\Column(name="orderType", type="string")
     */
    private $orderType = '';

    /**
     * @var string
     *
     * @ORM\Column(name="crmId", type="string", length=150, nullable=true)
     */
    private $crmId;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="smallint", options={"default":0}, nullable=true)
     */
    private $status = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="result", type="smallint", options={"default":0}, nullable=true)
     */
    private $result = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=1500, nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="integer", length=45, nullable=false)
     */
    private $userId;

    /**
     * @ORM\ManyToOne(targetEntity="User", cascade={"persist"})
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     **/
    private $user;


    public function __construct() {

    }

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * @return mixed
     */
    public function getOrdering() {
        return $this->ordering;
    }

    /**
     * @param mixed $ordering
     */
    public function setOrdering($ordering) {
        $this->ordering = $ordering;
    }

    /**
     * @return string
     */
    public function getOrderType() {
        return $this->orderType;
    }

    /**
     * @param string $orderType
     */
    public function setOrderType($orderType) {
        $this->orderType = $orderType;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string
     */
    public function getCrmId() {
        return $this->crmId;
    }

    /**
     * @param string $crmId
     */
    public function setCrmId($crmId) {
        $this->crmId = $crmId;
    }

    /**
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status) {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getResult() {
        return $this->result;
    }

    /**
     * @param string $result
     */
    public function setResult($result) {
        $this->result = $result;
    }

    /**
     * @return string
     */
    public function getComment() {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment) {
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getUserId() {
        return $this->userId;
    }

    /**
     * @param string $userId
     */
    public function setUserId($userId) {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user) {
        $this->user = $user;
    }

    /**
     * @return \DateTime
     */
    public function getDeletedAt() {
        return $this->deletedAt;
    }

    /**
     * @param \DateTime $deletedAt
     */
    public function setDeletedAt($deletedAt) {
        $this->deletedAt = $deletedAt;
    }


    /**
     * @ORM\PrePersist
     */
    public function onPrePersist() {
        $this->setCreatedAt(new \DateTime("now"));
    }

}

