<?php 
require __DIR__ . '/../vendor/autoload.php';

use VUHL\Doctrine\DoctrineFactory;
use VUHL\Blog\Entity\Tag;

$tagId = $_GET['tag'];

$df = new DoctrineFactory();
$em = $df->getEntityManager();

$tags = $em->getRepository('VUHL\Blog\Entity\Tag');

$tag = $tags->findOneById($tagId);

include(__DIR__ . '/partials/header.php');
?>
<div class="container">
    <h2>Posts Tagged "<?php echo $tag->getName(); ?>"</h2>
    <?php foreach($tag->getPosts() as $post) : ?>
        <?php include(__DIR__ . '/partials/blog_post.php'); ?>
    <?php endforeach; ?>
</div>
