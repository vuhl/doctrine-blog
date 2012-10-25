<?php

namespace VUHL\Blog\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @Entity @Table(name="posts")
 **/
class Post 
{
    /**
     * @Id
     * @Column(type="integer");
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @Column(type="string")
     */
    private $title;

    /**
     * @Column(type="text")
     */
    private $body;

    /**
     * @ManyToOne(targetEntity="Author", inversedBy="posts")
     */
    private $author;

    /**
     * @Column(type="datetime")
     */
    private $date;

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name) 
    {
        return $this->$name;
    }
}
