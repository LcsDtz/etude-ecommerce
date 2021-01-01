<?php
include("head.php");
include("nav.php");
include_once("../controleur/ClientC.php");
foreach ($donnees as $client) {
    if ($client->GetId() == $_SESSION['ID_Client']) {
        echo '
            <center>
            <form method="post" action="../controleur/CompteC.php">
                <h4>Nom Prenom</h4>
                <input class="form-control" type="text" value="' . $client->GetNom() . '" name="Nom" style="width:200px;margin-top:-10px;">
                <h4>Pseudo</h4>
                <input class="form-control" type="text" value="' . $client->GetPseudo() . '" name="Pseudo" style="width:200px;margin-top:-10px;">
                <h4>Password</h4>
                <input class="form-control" type="password"  name="password" style="width:200px;margin-top:-10px;">
                <h4>Numero</h4>
                <input class="form-control" type="text" value="' . $client->GetNumero() . '" name="Numero" style="width:50px;margin-top:-10px;">
                <h4>Rue</h4>
                <input class="form-control" type="text" value="' . $client->GetRue() . '" name="Rue" style="width:200px;margin-top:-10px;">
                <h4>Ville</h4>
                <input class="form-control" type="text" value="' . $client->GetVille() . '" name="Ville" style="width:200px;margin-top:-10px;">
                <h4>Code Postal</h4>
                <input class="form-control" type="text" value="' . $client->GetCP() . '" name="CP" style="width:200px;margin-top:-10px;">
                <h4>Mail</h4>
                <input class="form-control" type="email" value="' . $client->GetMail() . '" name="Mail" style="width:200px;margin-top:-10px;">
                <h4>Telephone</h4>
                <input class="form-control" type="text" value="' . $client->GetTel() . '" name="Tel" style="width:200px;margin-top:-10px;">
                <input class="btn btn-primary" type="submit" name="submit" value="Valider">
            </form>
            </center>';
    }
}
?>
</body>

</html>