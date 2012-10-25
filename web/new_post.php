<?php
namespace VUHL\Blog;
require __DIR__ . '/../vendor/autoload.php';

use VUHL\Blog\Router;

$router = new Router();
$router->setTemplateDir(__DIR__);
$router->newPostAction($_POST); 
