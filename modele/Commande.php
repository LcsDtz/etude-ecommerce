<?php
    class Commande
    {
        public $ID_Detail;
        public $ID_Com;
        public $Nom_Article;
        public $Image_Article;
        public $Prix_Article;
        public $Cat_Article;
        public $Qte_Article;
        public function __Construct($idd,$idc,$nom,$img,$prix,$cat,$qte)
        {
            $this->ID_Detail=$idd;
            $this->ID_Com=$idc;
            $this->Nom_Article=$nom;
            $this->Image_Article=$img;
            $this->Prix_Article=$prix;
            $this->Cat_Article=$cat;
            $this->Qte_Article=$qte;
        }

        function getIdd()
        {
            return $this->ID_Detail;
        }
        function getIdc()
        {
            return $this->ID_Com;
        }
        function getNom()
        {
            return $this->Nom_Article;
        }
        function getImg()
        {
            return $this->Image_Article;
        }
        function getPrix()
        {
            return $this->Prix_Article;
        }
        function getCat()
        {
            return $this->Cat_Article;
        }
        function getQte()
        {
            return $this->Qte_Article;
        }

        function setIdd($idd)
        {
            $this->ID_Detail=$idd;
        }
        function setIdc($idc)
        {
            $this->ID_Com=$idc;
        }
        function setNom($nom)
        {
            $this->Nom_Article=$nom;
        }
        function setImg($img)
        {
            $this->Image_Article=$img;
        }
        function setPrix($prix)
        {
            $this->Prix_Article=$prix;
        }
        function setCat($cat)
        {
            $this->Cat_Article=$cat;
        }
        function setQte($qte)
        {
            $this->Qte_Article=$qte;
        }
    }
?>