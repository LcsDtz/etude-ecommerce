<?php
class Article
{
    public $ID_Art;
    public $Ref_Art;
    public $Nom_Art;
    public $img;
    public $Prix;
    public $ID_Cat;

    public function __Construct($ida, $refa, $noma, $img, $prix, $idc)
    {
        $this->ID_Art = $ida;
        $this->Nom_Art = $noma;
        $this->Prix = $prix;
        $this->Ref_Art = $refa;
        $this->ID_Cat = $idc;
        $this->img = $img;
    }

    function Getida()
    {
        return $this->ID_Art;
    }
    function Getnoma()
    {
        return $this->Nom_Art;
    }
    function Getprix()
    {
        return $this->Prix;
    }
    function Getrefa()
    {
        return $this->Ref_Art;
    }
    function Getidc()
    {
        return $this->ID_Cat;
    }
    function Getimg()
    {
        return $this->img;
    }

    function Setida($ida)
    {
        $this->ID_Art = $ida;
    }
    function Setnoma($noma)
    {
        $this->Nom_Art = $noma;
    }
    function Setprix($prix)
    {
        $this->Prix = $prix;
    }
    function Setrefa($refa)
    {
        $this->Ref_Art = $refa;
    }
    function Setidc($idc)
    {
        $this->ID_Cat = $idc;
    }
    function Setimg($img)
    {
        $this->img = $img;
    }
}
