<?php
require("form.html");

require_once(dirname(__DIR__) . "/bootstrap.php");

$newUsername = $_POST['prenom'];
$newPass = $_POST['mdpconf'];

$user = new \Entity\User();
$user->setUsername($newUsername);
$user->setPass($newPass);

$entityManager->persist($user);
$entityManager->flush();
