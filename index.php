<?php
require 'Utilisateur.php';

$user = new Utilisateur();

$user->getUserById(1);
echo $user->afficheUtilisateur();
