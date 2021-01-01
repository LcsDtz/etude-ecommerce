<?php
    include("head.php");
 ?>

    <center>
    <form method="post" action="../controleur/InscriptionC.php">
        <h4>Nom Prenom</h4>
        <input class="form-control" type="text" name="Nom" style="width:200px;margin-top:-10px;">
        <h4>Pseudo</h4>
        <input class="form-control" type="text" name="Pseudo" style="width:200px;margin-top:-10px;">
        <h4>Password</h4>
        <input class="form-control" type="password" name="password" style="width:200px;margin-top:-10px;">
        <h4>Confirmer password</h4>
        <input class="form-control" type="password" name="password2" style="width:200px;margin-top:-10px;">
        <h4>Numero</h4>
        <input class="form-control" type="text" name="Numero" style="width:40px;margin-top:-10px;">
        <h4>Rue</h4>
        <input class="form-control" type="text" name="Rue" style="width:200px;margin-top:-10px;">
        <h4>Ville</h4>
        <input class="form-control" type="text" name="Ville" style="width:200px;margin-top:-10px;">
        <h4>Code Postal</h4>
        <input class="form-control" type="text" name="CP" style="width:200px;margin-top:-10px;">
        <h4>Mail</h4>
        <input class="form-control" type="email" name="Mail" style="width:200px;margin-top:-10px;">
        <h4>Telephone</h4>
        <input class="form-control" type="text" name="Tel" style="width:200px;margin-top:-10px;">
        <input class="btn btn-primary" type="submit" name="submit" value="Valider">
    </form>
    </center>
</body>
</html>

