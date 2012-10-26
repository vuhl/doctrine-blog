<?php

namespace VUHL\Blog\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
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

    /**
     * @ManyToMany(targetEntity="Tag", cascade={"persist"})
     */
    private $tags;

    public function __construct(){
        $this->tags = new ArrayCollection();
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name) 
    {
        return $this->$name;
    }

    public function addTag($tag) 
    {
        $this->tags->add($tag);
    }
}
