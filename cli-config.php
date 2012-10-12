<?PHP
include_once __DIR__ . '/vendor/autoload.php';

use VUHL\Doctrine\DoctrineFactory;

$df = new DoctrineFactory();
$entityManager = $df->getEntityManager();

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($entityManager)
));