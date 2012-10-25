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
                <div id="post-<?php echo $post->id; ?>">
                    <h2><?php echo $post->title; ?></h2>
                    <p class="muted">
                        Posted at <?php echo $post->date->format('m/d/Y H:i:s'); ?> by <?php echo $post->author->name; ?>
                    </p>
                    <div class="body">
                        <?php echo $post->body; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="javascripts/bootstrap.min.js"></script>
    </body>
    
</html>

