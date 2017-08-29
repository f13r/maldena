<?php

namespace Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Teachers
 *
 * @ORM\Table(name="teacher")
 * @ORM\Entity(repositoryClass="Domain\Repository\TeacherRepository")
 */
class Teacher extends User {

	CONST PHOTO_FOLDER_NAME = 'teachers';

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
     * @ORM\Column(name="specialization", type="string", length=1500, nullable=true)
     */
    private $specialization;

    /**
     * @var integer
     *
     * @ORM\Column(name="active", type="smallint", nullable=false, options={"default": 1})
     */
    private $active = 1;

	/**
	 * @var integer
	 *
	 * @ORM\Column(name="sort", type="smallint", nullable=false)
	 */
    private $sort;


	/**
	 * @return int
	 */
	public function getSort() {
		return $this->sort;
	}

	/**
	 * @param int $sort
	 */
	public function setSort($sort) {
		$this->sort = $sort;
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
    public function getActive() {
        return $this->active;
    }

    /**
     * @param mixed $active
     */
    public function setActive($active) {
        $this->active = $active;
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

