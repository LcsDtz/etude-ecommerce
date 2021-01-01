<?php include('head.php');

include("nav.php");
include_once("../controleur/CommandeC.php");
include_once("../controleur/ArticleC.php");

$panier=$_SESSION["panier"]->recupere();
$art=array();
$total=$_SESSION["panier"]->total();
if(isset($_GET["supprimer"])){
    $_SESSION["panier"]->effacer();
    header('location: panier.php');
    exit;
}
if(isset($_GET["enlever"])){
    $_SESSION["panier"]->enlever($_GET["enlever"]);
    header('location: panier.php');
    exit;
}
if(isset($_GET["id"])){
    $_SESSION["panier"]->ajouter($_GET["id"],$_POST["quantite"]);
    header('location: panier.php');
    exit;
}

for($i=0;$i<$total;$i++){
    foreach($donnees as $article){    
        if($article->Getida() == $panier['id'][$i]){
            $_SESSION["commande"][0][$i]=$article->Getnoma();
            $_SESSION["commande"][1][$i]=$article->Getimg();
            $_SESSION["commande"][2][$i]=$article->Getprix();
            $_SESSION["commande"][3][$i]=$article->Getidc();
            $_SESSION["commande"][4][$i]=$panier['qte'][$i];
            echo'
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-4">
                            <img src="images/'. $article->Getimg() .'" alt="" style="width:120px;height:100px;margin-left:100px">
                        </div>
                        <div class="col-4">
                            <h5>'.$article->Getnoma().'</h5>
                        </div>
                        <div class="col-4">  
                            <p>Prix : '.$article->Getprix().' </p>
                            <form method="post" action="?id='.$panier['id'][$i].'"><p>Quantité :<input type="number" name="quantite" style="width:50px;" value="'.$panier['qte'][$i].'"</input></p></form>
                            <a href="?enlever='.$article->GetIda().'"><button class="btn btn-warning">Enlever</button></a>
                            ';
                            if($panier['qte'][$i] > 9){
                                echo'<p><b>PROMO ! 10% OFFERT A PARTIR DE 10 ARTICLES</b></p>';
                                $promo=($article->Getprix()*$panier['qte'][$i])*0.1;  
                                $tot = $article->Getprix()*$panier['qte'][$i] - $promo;
                                }else
                                $tot = $article->Getprix()*$panier['qte'][$i];
                                echo'
                            <p style="margin-bottom:-45px;margin-top:5px;">Prix total : '.$tot.'</p>
                        </div>
                    </div>
                </div>';
        }
    }
}

if($total>0){
    echo'<a href="?supprimer=oui"><center><button class="btn btn-danger">Supprimer</button></a>
   <a href="commande.php"> <button class="btn btn-success">Commander</button></center></a>';
}

?>

</body>
</html>