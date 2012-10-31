<?php

namespace VUHL\Blog\Entity;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @Entity @Table(name="tags")
 **/
class Tag
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
    private $name;

    /**
     * @ManyToMany(targetEntity="Post")
     */
    private $posts;

    public function __construct()
    {
        $this->posts = new ArrayCollection();
    }
    /**
     * Gets the value of post
     *
     * @return 
     */
    public function getPosts()
    {
        return $this->posts;
    }

    public function addPost($post)
    {
        $this->posts->add($post);
    }
    /**
     * Sets the value of post
     *
     * @param mixed $post 
     */
    public function setPosts($posts)
    {
        $this->posts = $posts;
        return $this;
    }
    /**
     * Gets the value of name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Sets the value of name
     *
     * @param mixed $name string
     *
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Gets the value of id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Sets the value of id
     *
     * @param mixed $id int
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

}
