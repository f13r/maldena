<?php

namespace Domain\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Demo
 *
 * @ORM\Entity(repositoryClass="Domain\Repository\DemoRepository")
 * @ORM\Table(name="demo")
 */
class Demo extends Activity {

}

