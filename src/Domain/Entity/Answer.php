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
	 * @Column(name="answer", type="string", length=10000, nullable=true)
	 */
	private $answer;


	/**
	 * @var string
	 *
	 * @Column(name="goals", type="string", length=1000, nullable=true)
	 */
	private $goals;

	/**
	 * @var string
	 *
	 * @Column(name="status", type="smallint", options={"default":0})
	 */
	private $status;


	/**
	 * @var string
	 *
	 * @Column(name="result", type="smallint", options={"default":0})
	 */
	private $result;

	/**
	 * @var \DateTime
	 *
	 * @Column(name="created_at", type="datetime", nullable=false)
	 */
	private $createdAt = NULL;

	/**
	 * @var string
	 *
	 * @Column(name="user_id", type="integer", length=45, nullable=false)
	 */
	private $userId;

	/**
	 * @ManyToOne(targetEntity="User")
	 * @JoinColumn(name="user_id", referencedColumnName="id")
	 **/
	private $user;

	private $textResults = [
		0 => 'Не оценивался',
		1 => 'Doesn\'t have level',
		2 => 'Elementary',
		3 => 'Pre Intermediate',
		4 => 'Intermediate',
		5 => 'Upper Intermediate',
		6 => 'Advanced'
	];
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
	public function getAnswer() {
		return $this->answer;
	}

	/**
	 * @param string $answer
	 */
	public function setAnswer($answer) {
		$this->answer = $answer;
	}

	/**
	 * @return string
	 */
	public function getGoals() {
		return $this->goals;
	}

	/**
	 * @param string $goals
	 */
	public function setGoals($goals) {
		$this->goals = $goals;
	}

	/**
	 * @return mixed
	 */
	public function getUserId() {
		return $this->userId;
	}

	/**
	 * @param mixed $userId
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
	public function getCreatedAt() {
		return $this->createdAt;
	}

	/**
	 * @param \DateTime $createdAt
	 */
	public function setCreatedAt() {
		$this->createdAt = new \DateTime("now");
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

	public function getTextResult() {
		if (isset($this->textResults)) {
			return $this->textResults[$this->result];
		}
	}
}

