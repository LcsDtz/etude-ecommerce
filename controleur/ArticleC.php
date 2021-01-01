<?php
include_once("../modele/Init.php");
include("../modele/Article.php");

$req = 'SELECT * FROM article';
$reqCat = $cnx_bdd->query($req);
$tab = $reqCat->fetchAll();
$donnees = array();
foreach ($tab as $article) {
    array_push($donnees, new Article($article['ID_Article'], $article['Reference_Article'], $article['Nom_Article'], $article['Image_Article'], $article['Prix_Article'], $article['Cat_Article']));
}
