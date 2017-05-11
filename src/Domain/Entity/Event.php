<?php

namespace Domain\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Services\Utils;

/**
 * Users
 *
 * @ORM\Table(name="event")
 * @ORM\Entity
 */
class Event {

	const STATUS_ACTIVE = 1;

	const STATUS_INACTIVE = 0;

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
	 * @ORM\Column(name="title", type="string", length=300, nullable=true)
	 */
	private $title;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="description", type="string", length=1500, nullable=true)
	 */
	private $description;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="date", type="datetime", nullable=false)
	 */
	private $date;

	/**
	 * @var integer
	 *
	 * @ORM\Column(name="participant_count", type="integer", nullable=false)
	 */
	private $participantCount;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="price", type="string", length=10, nullable=true)
	 */
	private $price;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="teacher", type="string", nullable=false)
	 */
	private $teacher;

	/**
	 * @var integer
	 *
	 * @ORM\Column(name="status", type="integer", nullable=false)
	 */
	private $status;

	public function __construct() {
		$this->status = self::STATUS_ACTIVE;
	}

	public function getId() {
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @return int
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * @param int $status
	 */
	public function setStatus($status) {
		$this->status = $status;
	}


	/**
	 * @param string $title
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * @return string
	 */
	public function getTeacher() {
		return $this->teacher;
	}

	/**
	 * @param string $teacher
	 */
	public function setTeacher($teacher) {
		$this->teacher = $teacher;
	}

	/**
	 * @return int
	 */
	public function getParticipantCount() {
		return $this->participantCount;
	}

	/**
	 * @param int $participantCount
	 */
	public function setParticipantCount($participantCount) {
		$this->participantCount = $participantCount;
	}

	/**
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @param string $description
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * @return \DateTime
	 */
	public function getDate() {
		return $this->date->format(Utils::dateTimeFormat());
	}

	/**
	 * @param \DateTime $date
	 */
	public function setDate($date) {
		$this->date = $date;
	}


	/**
	 * @return string
	 */
	public function getPrice() {
		return $this->price;
	}

	/**
	 * @param string $price
	 */
	public function setPrice($price) {
		$this->price = $price;
	}



}

