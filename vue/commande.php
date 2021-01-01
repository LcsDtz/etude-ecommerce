<?php include('head.php');
include("nav.php");
include_once("../controleur/ClientC.php");
$total=$_SESSION["panier"]->total();
if(isset($_POST['submit'])) 
{
    $bdd = new PDO('mysql:host=localhost;dbname=pmu;charset=utf8', 'root', 'root');
    $date = date('Y-m-d');

    $bdd->query("INSERT INTO `commande` (`ID_Com`, `Date_Com`, `ID_Client`, `Montant`) VALUES (NULL, '".$date."', '".$_SESSION['ID_Client']."', '".$_SESSION["montant"]."');");
    
    $req= $bdd -> query( 'SELECT ID_Com FROM commande ORDER BY ID_Com DESC LIMIT 1');
    $val = $req->fetch();
    
    for($j=0;$j<$total;$j++){
        $bdd->query ("INSERT INTO `detail_commande` (`ID_Detail`, `ID_Com`, `Nom_Article`, `Image_Article`, `Prix_Article`, `Cat_Article`, `Qte_Article`) VALUES (NULL, '".$val['ID_Com']."', '".$_SESSION["commande"][0][$j]."', '".$_SESSION["commande"][1][$j]."', '".$_SESSION["commande"][2][$j]."', '".$_SESSION["commande"][3][$j]."' ,'".$_SESSION["commande"][4][$j]."') ;");
    }
    header('location:commandes.php');
}
    foreach($donnees as $client){    
        if($client->GetId() == $_SESSION['ID_Client']){
            echo'
            <div class="jumbotron">
                <div class="row">
                    <div class="col-4">
                        <p>Adresse de facturation</p>
                        <p>Nom : '.$client->GetNom().'</p>
                        <p>Adresse : '.$client->GetNumero().' '.$client->GetRue().'</p>
                        <p>Ville : '.$client->GetVille().' '.$client->GetCP().'</p>
                    </div>
                    
                    <div class="col-4">
                    ';
                }
            }
            $montant=0;
            for($j=0;$j<$total;$j++){
                echo'  
                        <h5>'.$_SESSION["commande"][0][$j].'</h5>
                        <p>Prix : '.$_SESSION["commande"][2][$j].' </p>
                        <p>Quantité : '.$_SESSION["commande"][4][$j].'</p>';
                        if($_SESSION["commande"][4][$j] > 9){
                        echo'<p><b>PROMO ! 10% OFFERT A PARTIR DE 10 COMMANDES</b></p>';
                        $promo=($_SESSION["commande"][2][$j]*$_SESSION["commande"][4][$j])*0.1;
                        $montant=$montant+$_SESSION["commande"][2][$j]*$_SESSION["commande"][4][$j]-$promo;  
                        }else
                            $montant=$montant+$_SESSION["commande"][2][$j]*$_SESSION["commande"][4][$j];  
                        $_SESSION["montant"]=$montant;
            }
            echo 'Total = '.$_SESSION["montant"].'€';
                    echo'
                    </div>
                    <div class="col-4">  
                        <p>Nom Prenom</p>
                        <input class="form-control" type="text" name="Nom" style="width:200px;margin-top:-10px;">
                        <p>Numero</p>
                        <input class="form-control" type="text" name="Num" style="width:200px;margin-top:-10px;">
                        <p>Date</p>
                        <input class="form-control" type="date" name="Date" style="width:200px;margin-top:-10p;">
                        <p>Cryptogramme</p>
                        <input class="form-control" type="password"  name="password" style="width:200px;margin-top:-10px;">
                        <form method="post" action=""><button class="btn btn-success" name="submit">Commander</button></form>
                    </div>
                </div>
            </div>';

    

?>