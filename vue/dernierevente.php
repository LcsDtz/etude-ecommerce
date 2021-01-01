<?php
include_once("../controleur/CommandeC.php");

echo'
<div class="jumbotron" style="height:350px;">
    <div class="row">
        <div class="col-9">
            <h3 style="margin-top:-33px;">Dernières ventes</h3> ';

            foreach($tab3 as $val)
            echo'
            <div class="card text-white bg-primary mb-3" style="display:inline-block; margin-left:15px;width:160px;">
                <div class="card-header">'.$val[2].'</div>
                <div class="card-body">
                    <h4 class="card-title"><img style="width:120px;height:100px;" src="images/'.$val[3].'"></h4>
                    <p class="card-text">'.$val[4].'€</p>
                </div>
            </div>';

   ?>         
            
        </div>
        <div class="col-3" style="border-left:2px solid white;margin-left:-15px;"><?php include("conseil.php");?></div>
    </div>
</div>

