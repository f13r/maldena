<?php

namespace Domain\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Demo
 *
 * @ORM\Entity(repositoryClass="Domain\Repository\DemoRepository")
 * @ORM\Table(name="participant")
 */
class Participant extends Activity {

	/**
	 * @ORM\ManyToOne(targetEntity="Event", cascade={"persist"})
	 * @ORM\JoinColumn(name="event_id", referencedColumnName="id")
	 **/
	private $event;

	/**
	 * @return mixed
	 */
	public function getEvent() {
		return $this->event;
	}

	/**
	 * @param mixed $event
	 */
	public function setEvent($event) {
		$this->event = $event;
	}



}

