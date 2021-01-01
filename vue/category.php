<ul class="nav nav-tabs">
    <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Catégories</a>
            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 39px, 0px);">
                <?php
                    foreach($donnees as $categorie) {
                        echo '<a class="dropdown-item" href="accueil.php?id='. $categorie->Getidc() .'">'. $categorie->Getnomc() .'</a>';
                    }?>
            </div>
    </li>
</ul>