<?php

require_once('../connect.php');

// Réaliser une requête qui permet de récupérer tous les films d'avant 2002

$oldMovie = $db->prepare('SELECT infos_movies.title, release_year FROM infos_movies
                        INNER JOIN `release_years` ON infos_movies.release_years_id = release_years.id
                        WHERE release_year < 2002');
$oldMovie->execute();
$res_oldMovie = $oldMovie->fetchAll(PDO::FETCH_ASSOC);