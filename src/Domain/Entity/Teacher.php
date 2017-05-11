<?php

namespace Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Teachers
 *
 * @ORM\Entity
 * @ORM\Table(name="teacher")
 * @ORM\HasLifecycleCallbacks
 */
class Teacher {

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
	 * @ORM\Column(name="pageName", type="string", length=300, nullable=true)
	 */
	private $pageName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1500, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=300, nullable=true)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="specialization", type="string", length=1500, nullable=true)
     */
    private $specialization;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint", nullable=false, options={"default": 1})
     */
    private $status = 1;

    /**
     * @ORM\ManyToOne(targetEntity="User", cascade={"persist"})
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     **/
    private $user;

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
     * @return string
     */
    public function getTitle() {
        return $this->title;
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
    public function getPhoto() {
        return $this->photo;
    }

    /**
     * @param string $photo
     */
    public function setPhoto($photo) {
        $this->photo = $photo;
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
     * @return mixed
     */
    public function getSpecialization() {
        return $this->specialization;
    }

    /**
     * @param mixed $specialization
     */
    public function setSpecialization($specialization) {
        $this->specialization = $specialization;
    }

    /**
     * @return mixed
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status) {
        $this->status = $status;
    }

	/**
	 * @return string
	 */
	public function getPageName() {
		return $this->pageName;
	}

	/**
	 * @param string $pageName
	 */
	public function setPageName($pageName) {
		$this->pageName = $pageName;
	}



}

