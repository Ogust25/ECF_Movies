<?php

require_once('../connect.php');

// Réaliser une requête permettant de récupérer le titre, l'année de sortie et le réalisateur de chaque film

$allInOne = $db->prepare('SELECT infos_movies.title, release_years.release_year, directors.director_name FROM infos_movies
                        INNER JOIN release_years ON release_years.id = infos_movies.id
                        INNER JOIN directors_has_infos_movies ON directors_has_infos_movies.infos_movies_id = infos_movies.id
                        INNER JOIN directors ON directors.id = directors_has_infos_movies.directors_id');
$allInOne->execute();
$res_allInOne = $allInOne->fetchAll(PDO::FETCH_ASSOC);
var_dump($res_allInOne);