<?php include('head.php');
include_once("../controleur/CommandeC.php");

include("nav.php");
        foreach($tab2 as $detailcommande){
            if($detailcommande[2]==$_SESSION["ID_Client"]){
            echo'
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-4">
                            <a href="pdf.php?id='.$detailcommande[0].'" target="_blank"><img src="images/pdf.png" alt="" style="width:120px;height:100px;margin-left:100px"></a>
                        </div>
                        <div class="col-4">';
                        
                         foreach($dval as $art){
                             if($art->getIdc() == $detailcommande[0]){
                                 echo'<p>'.$art->getNom().'</p>';
                             }
                         }
                        echo'</div>
                        <div class="col-4">  
                            <p>Prix :  '.$detailcommande[3].'</p>
                            <p>Date : '.$detailcommande[1].' </p>
                        </div>
                    </div>
                </div>';
                        }
        }
?>

</body>
</html>