<?php
namespace VUHL\Blog;

use VUHL\Blog\Entity\Blog;
use VUHL\Blog\Entity\Author;
use VUHL\Doctrine\DoctrineFactory;

class Router 
{
    private $templateDir;
    private $em;
    private $author;
    public function __construct() 
    {
        // in the real world we wouldn't do this. 
        $df = new DoctrineFactory();
        $this->em = $df->getEntityManager();
        $this->init();
    }

    public function setTemplateDir($templateDir) 
    {
        $this->templateDir = $templateDir;
    }
    public function newPostAction($request) 
    {
        if(empty($request)) 
        {
            include($this->templateDir . "/new_post_form.php");
        } 
        else
        {
            $post = new Post();
            $post->title  = $request['title'];
            $post->body   = $request['body'];
            $post->author = $this->author;
            $post->date   = new \DateTime("now", new DateTimezone("america/chicago"));
            $this->em->persist($post);
            $this->em->flush();
            header('Location: /');
        }
    }

    private function init(){
        if($this->getAuthorCount() == 0)
        {
            $this->author = new Author();
            $this->author->name = "Jeffery Lebowski";
            $this->em->persist($this->author);
            $this->em->flush();
        } 
        else 
        {
            $repository = $this->em->getRepository('VUHL\Blog\Entity\Author');
            $this->author = $repository->findOneByName("Jeffery Lebowski");
        }
    }

    private function getAuthorCount($author)
    {
        $query = $this->em->createQuery('SELECT COUNT(a.id) FROM VUHL\Blog\Entity\Author a');
        return $query->getSingleScalarResult();

    }
}
