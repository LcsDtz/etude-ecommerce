<?php
    include("../vue/head.php");
    include("../controleur/ClientC.php");

    $pseudo_erreur1 = NULL;
    $pseudo_erreur2 = NULL;
    $mdp_erreur = NULL;
    $cp_erreur = NULL;
    $tel_erreur = NULL;
    $email_erreur1 = NULL;
    $email_erreur2 = NULL;

    if(isset($_POST['submit'])) 
    {
        $i = 0;
        $nom=$_POST["Nom"];
        $pseudo= $_POST['Pseudo'];
        $mail = $_POST['Mail'];
        $password = md5($_POST['password']);
        $confirm = md5($_POST['password2']);
        $numero = $_POST['Numero'];
        $rue  = $_POST['Rue'];
        $ville = $_POST['Ville'];
        $cp = $_POST['CP'];
        $tel = $_POST['Tel'];

    

        foreach($donnees as $client){
            if($pseudo ==  $client->GetPseudo())
            {
                $pseudo_erreur1 = "Votre pseudo est déjà utilisé par un membre";
                $i++;
            }
        }

        if (strlen($pseudo) < 3 || strlen($pseudo) > 15)
        {
            $pseudo_erreur2 = "Votre pseudo est soit trop grand, soit trop petit";
            $i++;
        }

        if ($password != $confirm || empty($confirm) || empty($password) || strlen($password) < 6)
        {
            $mdp_erreur = "Votre mot de passe et votre confirmation diffèrent, ou sont vides, ou ne contient pas 6 caractères minimum";
            $i++;
        }

        if(strlen($cp)!=5){
            $cp_erreur = "Votre code postal doit être composé uniquement de 5 chiffres.";
            $i++;
        }
        if(strlen($tel)!=10){
            $cp_erreur = "Votre numero de telephone doit être composé uniquement de 10 chiffres.";
            $i++;
        }

        foreach($donnees as $client){
            if($mail == $client->GetMail())
            {
                $email_erreur1 = "Votre adresse email est déjà utilisée par un membre";
                $i++;
            }
        }
        if (!preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", $mail) || empty($mail))
        {
            $email_erreur2 = "Votre adresse E-Mail n'a pas un format valide";
            $i++;
        }

       if ($i==0)
       {
        echo'<h1>Inscription terminée</h1>';
        echo'<p>Bienvenue '.stripslashes(htmlspecialchars($_POST['Pseudo'])).' vous êtes maintenant inscrit.</p>
    <p>Cliquez <a href="./accueil.php">ici</a> pour revenir à la page d accueil</p>';
        

         $bdd = new PDO('mysql:host=localhost;dbname=pmu;charset=utf8', 'root', 'root');
        $bdd->query ("INSERT INTO `client` (`ID_Client`, `Nom_Client`, `Pseudo`, `Mdp`, `Numero`, `Rue`, `CP`, `Ville`, `Mail`, `Tel`) 
        VALUES (NULL, '".$nom."', '".$pseudo."','".$password."', '".$numero."', '".$rue."', '".$cp."','".$ville."', '".$mail."', '".$tel."');");
            
        $_SESSION['pseudo'] = $pseudo;
        }
        else
        {
            echo'<h1>Inscription interrompue</h1>';
            echo'<p>Une ou plusieurs erreurs se sont produites pendant l incription</p>';
            echo'<p>'.$i.' erreur(s)</p>';
            echo'<p>'.$pseudo_erreur1.'</p>';
            echo'<p>'.$pseudo_erreur2.'</p>';
            echo'<p>'.$mdp_erreur.'</p>';
            echo'<p>'.$email_erreur1.'</p>';
            echo'<p>'.$email_erreur2.'</p>';
            echo'<p>'.$tel_erreur.'</p>';
            echo'<p>'.$cp_erreur.'</p>';
            echo'<p>Cliquez <a href="../vue/inscription.php">ici</a> pour recommencer</p>';
        }
    }
?>