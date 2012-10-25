<?php

namespace VUHL\Doctrine;

use Doctrine\ORM\Tools\Setup;

class DoctrineFactory{

	private $conn;
	private $config;

	public function __construct(){
		$isDevMode = true;
        $this->config = Setup::createAnnotationMetadataConfiguration(
            array(__DIR__."/../Blog/Entity"), 
            $isDevMode);

		$this->conn = array(
		    'driver' => 'pdo_sqlite',
		    'path' => __DIR__ . '../../../../db.sqlite',
		);

	}

	public function getEntityManager(){
		return \Doctrine\ORM\EntityManager::create($this->conn, $this->config);
	}
}
