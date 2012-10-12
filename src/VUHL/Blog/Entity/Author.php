<?php

namespace VUHL\Blog\Entity;

/**
 * @Entity @Table(name="author")
 **/
class Author 
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
     * @OneToMany(targetEntity="Post", mappedBy="author", cascade={"persist"})
     */
    private $posts;

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}
