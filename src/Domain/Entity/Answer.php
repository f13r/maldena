<?php

namespace Domain\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * Users
 *
 * @Table(name="answer")
 * @Entity
 */
class Answer
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
	 * @Column(name="answers", type="string", length=10, nullable=true)
	 */
	private $answers;

	/**
	 * @var \DateTime
	 *
	 * @Column(name="created_at", type="datetime", nullable=false)
	 */
	private $createdAt = NULL;

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

	public function getId() {
		return $this->id;
	}

	/**
	 * @param string $answers
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getAnswers() {
		return $this->answers;
	}

	/**
	 * @param string $answers
	 */
	public function setAnswers($answers) {
		$this->answers = $answers;
	}

}

