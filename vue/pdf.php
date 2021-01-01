<?php
include_once("../controleur/CommandeC.php");
include_once("../controleur/ClientC.php");

require('fpdf/code.php');

foreach($donnees as $client){    
    if($client->GetId() == $_SESSION['ID_Client']){
    $nom=$client->GetNom();
    $numero=$client->GetNumero();
    $rue=$client->GetRue();
    $cp=$client->GetCP();
    $ville=$client->GetVille();
    }
}

foreach($tab2 as $detailcommande){
    if($detailcommande[2]==$_SESSION["ID_Client"] && $detailcommande[0] ==$_GET["id"]){
        $date=$detailcommande[1];
        $montant=$detailcommande[3];
    }
}



$pdf = new PDF_Invoice( 'P', 'mm', 'A4' );
$pdf->AddPage();
$pdf->addSociete( $nom,
                  $numero.$rue."\n" .
                  $cp.$ville."\n");
$pdf->addDate( $date);
$pdf->addReglement("Carte VISA");
$cols=array( "CATEGORIE"    => 23,
             "DESIGNATION"  => 78,
             "QUANTITE"     => 22,
             "PRIX"      => 26,
             "PROMO" => 25,
             "TOTAL"          => 16 );
$pdf->addCols( $cols);
$cols=array( "CATEGORIE"    => "L",
             "DESIGNATION"  => "L",
             "QUANTITE"     => "C",
             "PRIX"      => "R",
             "PROMO" => "R",
             "TOTAL"          => "C" );
$pdf->addLineFormat( $cols);
$pdf->addLineFormat($cols);

$y    = 109;

foreach($dval as $art){
    if($art->getIdc() == $_GET["id"]){
        if($art->getQte()>9){
            $promo="10%";
            $reduction=($art->getQte()*$art->getPrix())*0.1;
            $tot=$art->getQte()*$art->getPrix()-$reduction;
            }
        else{
            $promo="Aucune";
            $tot=$art->getQte()*$art->getPrix();
        }
            
        $line = array( "CATEGORIE"    => $catart=$art->getCat(),
               "DESIGNATION"  => $art->getNom(),
               "QUANTITE"     => $art->getQte(),
               "PRIX"      => $art->getPrix(),
               "PROMO" => $promo,
               "TOTAL"          => $tot );
$size = $pdf->addLine( $y, $line );
$y   += $size + 2;
    }
}

$pdf->addTVAs( $montant);
$pdf->addCadreEurosFrancs();

$pdf->Output();
?>