<?php

require_once('../connect.php');

// Réaliser une requête qui permet de récupérer tous les films d'avant 2002

$filmBef2002 = $db->prepare('SELECT infos_movies.title, release_year FROM `release_years`
                            INNER JOIN infos_movies ON infos_movies.id = release_years.id
                            WHERE release_year < 2002');
$filmBef2002->execute();
$res_filmBef2002 = $filmBef2002->fetchAll(PDO::FETCH_ASSOC);
var_dump($res_filmBef2002);