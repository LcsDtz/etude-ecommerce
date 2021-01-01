<?php 
include_once("Init.php");
include("Client.php");

$req= 'SELECT * FROM client WHERE Pseudo=?';
$reqCli = $cnx_bdd->prepare($req);
$reqCli->execute(array($_POST['Pseudo']));
$tab = $reqCli->fetch();

if($tab)
{
    $client = new Client($tab['ID_Client'], $tab['Nom_Client'], $tab['Pseudo'], $tab['Mdp'], $tab['Numero'], $tab['Rue'], $tab['CP'], $tab['Ville'], $tab['Mail'], $tab['Tel']);

    $pseudo = $client->getPseudo();
    $mdp = $client->getMdp();

    if (isset($_POST['Pseudo']) && isset($_POST['password'])) {

        $mdpc = md5($_POST['password']);
        
        if ($pseudo == $_POST['Pseudo'] && $mdpc == $mdp) {
            $_SESSION['ID_Client'] = $client->getId();
            $array=array();
            $_SESSION['panier']=new Panier($array);
            header ('location: ../vue/accueil.php');
        }
    }
}else{
    header ('location: ../vue/connexion.php');
}
?>