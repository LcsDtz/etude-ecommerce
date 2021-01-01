<?php
    class Categorie
    {
        public $ID_Cat;
        public $Nom_Cat;
        public function __Construct($idc,$nomc)
        {
            $this->ID_Cat=$idc;
            $this->Nom_Cat=$nomc;
        }

        function Getidc()
        {
            return $this->ID_Cat;
        }

        function Getnomc()
        {
            return $this->Nom_Cat;
        }

        function SetId($idc)
        {
            $this->ID_Cat=$idc;
        }

        function SetLib($nomc)
        {
            $this->Nom_Cat=$nomc;
        }
    }
?>