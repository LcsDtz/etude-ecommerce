<?php
include_once("Gestion.php");
include("../modele/Panier.php");

$bdd = new Database("localhost","root","root","pmu");
$cnx_bdd = $bdd->getDB();
session_start();

?>