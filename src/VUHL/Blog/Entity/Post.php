<?php
namespace VUHL\Blog\Entity;


use Doctrine\ORM\Mapping as ORM;

class Post 
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
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $body;

    /**
     * @ORM\ManyToOne(targetEntity="Author", inverseBy="posts")
     */
    private $author;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}
