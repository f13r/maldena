<?php

namespace Domain\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Entity
 * @ORM\Table(name="queue")
 */
class Queue {

    const NOTIFIER_TYPE = 0;

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
     * @ORM\Column(name="data", type="text", nullable=false)
     */
    private $data;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt = NULL;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt = NULL;

    /**
     * @var string
     *
     * @ORM\Column(name="task", type="string", length=150, nullable=true)
     */
    private $task;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="smallint", nullable=false)
     */
    private $type;



    public function __construct() {
        $this->createdAt = new \DateTime;

    }

    public function getId() {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param string $data
     */
    public function setData($data) {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getTask() {
        return $this->task;
    }

    /**
     * @param string $task
     */
    public function setTask($task) {
        $this->task = $task;
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
     * @return \DateTime
     */
    public function getCreatedAt() {
        return $this->createdAt;
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
    public function getType() {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type) {
        $this->type = $type;
    }



}

