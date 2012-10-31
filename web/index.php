<?php
namespace VUHL\Blog;

require __DIR__ . '/../vendor/autoload.php';


use VUHL\Doctrine\DoctrineFactory;

$factory = new DoctrineFactory();
$em =  $factory->getEntityManager();

//$posts = $em->getRepository('VUHL\Blog\Entity\Post')->getTenMostRecent();
$posts = $em->getRepository('VUHL\Blog\Entity\Post')->findAll();


include(__DIR__ . '/partials/header.php'); 
?>
         <div class="container">
            <?php foreach ($posts as $post) : ?>
                <?php include(__DIR__ . '/partials/blog_post.php'); ?>
            <?php endforeach; ?>
        </div>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="javascripts/bootstrap.min.js"></script>
    </body>
    
</html>

