<?php 
include('head.php');
include("nav.php");
include_once("../controleur/CategorieC.php");
include("category.php");

include("../controleur/ArticleC.php");

 ?>
<section name="article" style="margin-left:30px; margin-top:33px;">
    <h3>Articles</h3>
    <div class="row">
    <?php
        if(isset($_GET["panierajouter"])){
            $_SESSION["panier"]->ajouter($_GET["panierajouter"],1);
        }
        foreach($donnees as $article){
                if($article->Getida() == $_GET["id"]){
                    echo'<div class="col">
                    <div class="card text-white bg-primary mb-3" style="display:inline-block;">
                        <div class="card-header">'. $article->Getnoma() .'</div>
                        <div class="card-body">
                            <h4 class="card-title"><img src="images/'. $article->Getimg() .'" style="width:175px;height:150px;"></h4>
                            <p class="card-text">'. $article->Getprix() .'€</p>
                            <a href="accueil.php?panierajouter='.$article->getIda().'"><input class="btn btn-success" type="submit" value="+" style="float:right;margin-top:-40px;"></a>
                            <a href="accueil.php"><input class="btn btn-danger" type="submit" value="Retour" style="display:block;"></a>
                            </div>
                    </div>
                </div>';
                    }
                }
            
        
        ?>