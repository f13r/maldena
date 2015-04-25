<?php

namespace Domain\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Feedbacks
 *
 * @Table(name="feedbacks")
 * @Entity @HasLifecycleCallbacks
 */
class Feedbacks
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
     * @Column(name="text", type="text", length=65535, nullable=false)
     */
    private $text;

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
   

    public function getUser() {
        return $this->user;
    }

    public function setUser($user) {
        $this->user = $user;
    }
    /**
     * Gets the value of id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param integer $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of text.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets the value of text.
     *
     * @param string $text the text
     *
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * Gets the value of createdAt.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

      /**
     * Gets the value of createdAt.
     *
     */
    public function setCreatedAt()
    {
        $this->createdAt = new \DateTime('now');
    }


    /**
     * Gets the value of userId.
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Sets the value of userId.
     *
     * @param string $userId the user id
     *
     * @return self
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
}

