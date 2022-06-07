<?php

require_once('../connect.php');

// Réaliser une requête qui permet de récupérer toutes les catégories

$cat = $db->prepare('SELECT category FROM `categories`');
$cat->execute();
$res_cat = $cat->fetchAll(PDO::FETCH_ASSOC);


// Réaliser une requête qui permet d'afficher le nombre de films par catégories

$nbrFilm_cat = $db->prepare('SELECT categories.category, COUNT(infos_movies_id) FROM `categories_has_infos_movies`
                            INNER JOIN categories ON categories.id = categories_has_infos_movies.categories_id
                            GROUP BY categories_id');
$nbrFilm_cat->execute();
$res_nbrFilm_cat = $nbrFilm_cat->fetchAll(PDO::FETCH_ASSOC);