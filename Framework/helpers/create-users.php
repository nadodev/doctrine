<?php

require 'vendor/autoload.php';
require 'bootstrap.php';

[$filename, $username, $password] = $argv;


$user = new \Framework\Entity\User();

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$user->setUsername($username);

$user->setPassword($hashedPassword);

$entityManager->persist($user);

$entityManager->flush();

echo "Created User with ID " . $user->getId() . "\n";