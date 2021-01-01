<?php
include_once("../modele/Init.php");
include("../modele/Commande.php");

$total=$_SESSION["panier"]->total();
$tab_commande = array();
$_SESSION["commande"]=array(array(),array());

$req= 'SELECT * FROM detail_commande';
$reqDCom = $cnx_bdd->query($req);
$tab = $reqDCom->fetchAll();
$dval = array();
foreach($tab as $commande){
    array_push($dval, new Commande($commande['ID_Detail'], $commande['ID_Com'], $commande['Nom_Article'], $commande['Image_Article'], $commande['Prix_Article'], $commande['Cat_Article'], $commande['Qte_Article'])); 
}

$req2='SELECT * FROM commande WHERE ID_Client = '.$_SESSION["ID_Client"].'';
$reqCom = $cnx_bdd->query($req2);
$tab2 = $reqCom->fetchAll();

$req3='SELECT * FROM detail_commande ORDER BY ID_Detail  DESC LIMIT 5';
$reqDcom = $cnx_bdd->query($req3);
$tab3 = $reqDcom->fetchAll();

?>