<?php

session_start();
require 'lib.inc.php';

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];

$co = connexionBD();
inscription($co, $prenom, $nom, $email, $mdp);
deconnexionBD($co);
