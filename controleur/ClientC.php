<?php
include_once("../modele/Init.php");
include("../modele/Client.php");

$req= 'SELECT * FROM client';
$reqCat = $cnx_bdd->query($req);
$tab = $reqCat->fetchAll();
$donnees = array();
foreach($tab as $client){
    array_push($donnees, new Client($client['ID_Client'], $client['Nom_Client'], $client['Pseudo'], $client['Mdp'], $client['Numero'], $client['Rue'], $client['CP'], $client['Ville'], $client['Mail'], $client['Tel'])); 
}
?>