<?php

// Réaliser une requête qui permet de récupérer tous les titres des films

require_once('../connect.php');

$title = $db->prepare('SELECT title FROM `infos_movies`');
$title->execute();
$res = $title->fetch(PDO::FETCH_ASSOC);