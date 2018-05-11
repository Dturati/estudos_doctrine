<?php
require_once __DIR__."/vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$isDevMode = true;
$paths = array(__DIR__."/src/Entities");

$dbParams = [
    'driver'    =>  'pdo_mysql',
    'user'      =>  'root',
    'password'  =>  '123',
    'dbname'    =>  'teste',
    'host'      =>  'localhost'
];

$config = Setup::createAnnotationMetadataConfiguration($paths,$isDevMode,null, null, false);
$entityManager = EntityManager::create($dbParams, $config);
