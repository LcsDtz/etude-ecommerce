<?php
    class Client
    {
        public $ID_Client;
        public $Nom;
        public $Pseudo;
        public $mdp;
        public $Numero;
        public $Rue;
        public $CP;
        public $Ville;
        public $Mail;
        public $Tel;

        public function __Construct($id,$nom,$pseudo,$mdp,$numero,$rue,$cp,$ville,$mail,$tel)
        {
            $this->ID_Client=$id;
            $this->Nom=$nom;
            $this->Pseudo=$pseudo;
            $this->Mdp=$mdp;
            $this->Numero=$numero;
            $this->Rue=$rue;
            $this->CP=$cp;
            $this->Ville=$ville;
            $this->Mail=$mail;
            $this->Tel=$tel;
        }

        //Getter
        function GetId()
        {
            return $this->ID_Client;
        }
        function GetNom()
        {
            return $this->Nom;
        }
        function GetPseudo()
        {
            return $this->Pseudo;
        }
        function GetNumero()
        {
            return $this->Numero;
        }
        function GetVille()
        {
            return $this->Ville;
        }
        function GetTel()
        {
            return $this->Tel;
        }
        function GetMail()
        {
            return $this->Mail;
        }
        function GetMdp()
        {
            return $this->Mdp;
        }
        function GetRue()
        {
            return $this->Rue;
        }
        function GetCP()
        {
            return $this->CP;
        }


        //Setter
        function SetId($id)
        {
            $this->ID_Client=$id;
        }
        function SetNom($nom)
        {
            $this->Nom=$nom;
        }
        function SetPseudo($pseudo)
        {
            $this->Pseudo=$pseudo;
        }
        function SetNumero($numero)
        {
            $this->Numero=$numero;
        }
        function SetVille($ville)
        {
            $this->Ville=$ville;
        }
        function SetTel($tel)
        {
            $this->Tel=$tel;
        }
        function SetMail($mail)
        {
            $this->Mail=$mail;
        }
        function SetMdp($mdp)
        {
            $this->Mdp=$mdp;
        }
        function SetRue($rue)
        {
            $this->Rue=$rue;
        }
        function SetCP($cp)
        {
            $this->CP=$cp;
        }


    }