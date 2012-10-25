<?php
namespace VUHL\Blog;

require __DIR__ . '/../vendor/autoload.php';


use VUHL\Doctrine\DoctrineFactory;

$factory = new DoctrineFactory();
$em =  $factory->getEntityManager();

$posts = $em->getRepository('VUHL\Blog\Entity\Post')->findAll();


include(__DIR__ . '/partials/header.php'); 
?>
         <div class="container">
            <?php foreach ($posts as $post) : ?>
                <div id="post-<?php echo $post->getId(); ?>">
                    <h2><?php echo $post->getTitle(); ?></h2>
                    <div class="author"><?php echo $post->getAuthor(); ?></div>
                    <div class="body">
                        <?php echo $post->getBody(); ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="javascripts/bootstrap.min.js"></script>
    </body>
    
</html>

