<?php

namespace VUHL\Blog\Entity;

use Doctrine\ORM\Mapping as ORM;

class Author 
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer");
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Post",mappedBy="author", cascade={"persist"})
     */
    private $posts;

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}
