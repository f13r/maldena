<?php

namespace Domain\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Feedbacks
 *
 * @ORM\Entity(repositoryClass="Domain\Repository\FeedbackRepository")
 * @ORM\Table(name="feedback")
 */
class Feedback extends Activity {

    /**
     * @var string
     * @ORM\Column(name="text", type="text", length=65535, nullable=true)
     */
    private $text;

    /**
     * Gets the value of text.
     * @return string
     */
    public function getText() {
        return $this->text;
    }

    /**
     * Sets the value of text.
     * @param string $text the text
     * @return self
     */
    public function setText($text) {
        $this->text = $text;
    }

}

