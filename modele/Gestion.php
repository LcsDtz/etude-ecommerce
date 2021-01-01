<?php
class Database{
        private $bdd;

        public function __construct($server,$login,$mdp,$base)
        {
            define('DB_SERVER',$server);
            define('DB_USERNAME',$login);
            define('DB_PASSWORD',$mdp);
            define('DB_DATABASE',$base);
        }

        public function getDB()
        {
            $dbhost=DB_SERVER;
            $dbuser=DB_USERNAME;
            $dbpass=DB_PASSWORD;
            $dbname=DB_DATABASE;
            
            try{
                $db_connexion = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpass);
                $db_connexion->exec("set names utf8");
                $db_connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                return $db_connexion;
            } catch (PDOEXCEPTION $e){
                echo 'Echec de connexion :' .$e->getMessage();
            }
        }
    }
?>