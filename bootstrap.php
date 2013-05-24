<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/Entities/Site.php';
require __DIR__ . '/Entities/Domain.php';

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/Entities"), $isDevMode);

// database configuration parameters
$conn = array(
    'driver' => 'pdo_mysql',
	'dbname' => 'foobar',
	'user' => 'root',
	'password' => '',
);

$em = EntityManager::create($conn, $config);
