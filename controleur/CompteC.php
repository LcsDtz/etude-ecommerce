<?php
    include("../controleur/ClientC.php");

    if(isset($_POST['submit'])) 
    {
        $id=$_SESSION['ID_Client'];
        $password = md5($_POST['password']);
            $nom=$_POST["Nom"];
            $pseudo= $_POST['Pseudo'];
            $mail = $_POST['Mail'];
            $numero = $_POST['Numero'];
            $rue  = $_POST['Rue'];
            $ville = $_POST['Ville'];
            $cp = $_POST['CP'];
            $tel = $_POST['Tel'];

        if(!empty($_POST['password'])){
            $bdd = new PDO('mysql:host=localhost;dbname=pmu;charset=utf8', 'root', 'root');
        $bdd->query ("UPDATE client SET Nom_Client = '".$nom."', Pseudo = '".$pseudo."', Mdp = '".$password."', Numero = '".$numero."', Rue = '".$rue."', CP = '".$cp."', Ville = '".$ville."', Mail = '".$mail."', Tel = '".$tel."' WHERE ID_Client = '".$id."' ;'");
        }else{
            $bdd = new PDO('mysql:host=localhost;dbname=pmu;charset=utf8', 'root', 'root');
        $bdd->query ("UPDATE client SET Nom_Client = '".$nom."', Pseudo = '".$pseudo."',  Numero = '".$numero."', Rue = '".$rue."', CP = '".$cp."', Ville = '".$ville."', Mail = '".$mail."', Tel = '".$tel."' WHERE ID_Client = '".$id."' ;'");
        }            
        $_SESSION['pseudo'] = $pseudo;
        }
        header ('location: ../vue/compte.php');
?>