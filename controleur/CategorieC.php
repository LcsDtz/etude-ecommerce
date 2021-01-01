<?php
include_once("../modele/Init.php");
include("../modele/Categorie.php");

$req= 'SELECT * FROM categorie';
$reqCat = $cnx_bdd->query($req);
$tab = $reqCat->fetchAll();
$donnees = array();
foreach($tab as $categorie){
    array_push($donnees, new Categorie($categorie['ID_CAT'], $categorie['Designation'])); 
}
?>