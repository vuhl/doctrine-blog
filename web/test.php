<?php

include_once __DIR__ . '/../vendor/autoload.php';

use VUHL\Doctrine\DoctrineFactory;
use VUHL\Blog\Entity;


$df = new DoctrineFactory();
$em = $df->getEntityManager();

$authorRepository = $em->getRepository('VUHL\Blog\Entity\Author');
// $author = new Entity\Author();
// $author->setName('Tux');
// $em->persist($author);
// $em->flush();

$authors = $authorRepository->findAll();
foreach($authors as $author){
	echo $author . ' ';
}