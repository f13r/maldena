<?php

namespace Domain\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Test
 * @Entity(repositoryClass="Domain\Repository\TestRepository")
 * @Table(name="test")
 * @HasLifecycleCallbacks
 */
class Test extends Activity {

	/**
	 *
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
	 * @var int
	 * @Column(name="level", type="smallint", options={"default":0})
	 *
	 */
	private $level;

	/**
	 * @var array
	 */
	private $unserializedAnswer;

	/**
	 * Human represents of levels
	 * @var array $textResults
	 */
	private $textLevels = [
		0 => 'Не оценивался',
		1 => 'Doesn\'t have level',
		2 => 'Elementary',
		3 => 'Pre Intermediate',
		4 => 'Intermediate',
		5 => 'Upper Intermediate',
		6 => 'Advanced'
	];

	/**
	 * @return mixed
	 */
	public function getUnserializedAnswer() {
		return $this->unserializedAnswer;
	}

	/**
	 * @param mixed $unserializedAnswer
	 */
	public function setUnserializedAnswer($unserializedAnswer) {
		$this->unserializedAnswer = $unserializedAnswer;
	}


	/**
	 * @return int
	 */
	public function getLevel() {
		return $this->level;
	}

	/**
	 * @param int $level
	 */
	public function setLevel($level) {
		$this->level = $level;
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



	public function getTextLevel() {
		$textLevel = reset($this->textLevels);

		if (isset($this->textLevels[$this->getLevel()])) {
			$textLevel = $this->textLevels[$this->getLevel()];
		}

		return $textLevel;
	}

	/** @PostLoad */
	public function onPostLoad() {
		$this->setUnserializedAnswer(unserialize($this->getAnswer()));
	}

}

