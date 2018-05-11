<?php

require_once "bootstrap.php";
use App\Entities\User;

$newUsername = 'David';

$user = new User();
$user->setName($newUsername);

$entityManager->persist($user);
$entityManager->flush();

echo "Created User with ID " . $user->getId() . "\n";