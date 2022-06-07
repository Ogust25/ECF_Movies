<?php

require_once('../connect.php');

// Réaliser une requête affichant le nombre d'années entre le film le plus récent et le film le plus vieux

$diffFilmDate = $db->prepare('SELECT MAX(release_year) - MIN(release_year) FROM `release_years`');
$diffFilmDate->execute();
$res_diffFilmDate = $diffFilmDate->fetchAll(PDO::FETCH_ASSOC);