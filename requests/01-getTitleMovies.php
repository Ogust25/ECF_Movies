<?php

require_once('../connect.php');

// Réaliser une requête qui permet de récupérer tous les titres des films

$title = $db->prepare('SELECT title FROM `infos_movies`');
$title->execute();
$res = $title->fetchAll(PDO::FETCH_ASSOC);