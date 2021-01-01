<?php include_once('../modele/Panier.php'); ?>
<section name="article" style="margin-left:30px; margin-top:33px;">
    <h3>Articles</h3>
    <div class="row">
        <?php

        if (isset($_GET["panierajouter"])) {
            $_SESSION["panier"]->ajouter($_GET["panierajouter"], 1);
        }

        echo '<h4 style="color:red;">PROMOTION SPECIAL NOEL : REDUCTION DE 10% A PARTIR DE 10 ARTICLES !</h4><br>';
        foreach ($donnees as $article) {
            if (isset($_GET["id"]) > 0 && $_GET["id"] < 8) {
                if ($_GET["id"] > 0 && $_GET["id"] < 8) {
                    if ($article->Getidc() == $_GET["id"]) {
                        echo '<div class="col">
                            <div class="card text-white bg-primary mb-3" style="display:inline-block;">
                                <div class="card-header"><a href="produit.php?id=' . $article->getIda() . '" style="style-decoration:none;font-style:none;color:white;">' . $article->Getnoma() . '</a></div>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="produit.php?id=' . $article->getIda() . '"><img src="images/' . $article->Getimg() . '" style="width:175px;height:150px;"></a></h4>
                                    <p class="card-text">' . $article->Getprix() . '€</p>
                                </div>
                            </div>
                        </div>';
                    }
                }
            } else {
                echo '<div class="col">
                            <div class="card text-white bg-primary mb-3" style="display:inline-block;">
                                <div class="card-header"><a href="produit.php?id=' . $article->getIda() . '" style="style-decoration:none;font-style:none;color:white;">' . $article->Getnoma() . '</a></div>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="produit.php?id=' . $article->getIda() . '"><img src="images/' . $article->Getimg() . '" style="width:175px;height:150px;"></a></h4>
                                    <p class="card-text">' . $article->Getprix() . '€</p>
                                    <a href="?panierajouter=' . $article->getIda() . '"><input class="btn btn-success" type="submit" value="+" style="float:right;margin-top:-40px;"></a>
                                </div>
                            </div>
                        </div>';
            }
        }
        ?>
    </div>
</section>