<?php 
    class Panier{
        public $panier = array('id'=>array(), 'qte'=>array());

        public function __Construct()
        {
            $this->panier=$this->panier;
        }
        
        public function ajouter($id,$qte){            
            $pos=array_search($id,$this->panier['id']);
            if($pos !== false){
                $this->panier['qte'][$pos]=$qte;
            }
            else{
                array_push($this->panier['id'],$id);
                array_push($this->panier['qte'],$qte);
            }
        }

        public function effacer(){
            unset($this->panier);
        }

        public function total(){
            $nombre = count($this->panier['id']);
            return $nombre;
        }

        public function enlever($id){
            $pos=array_search($id,$this->panier['id']);
            array_splice($this->panier['id'],$pos,1);
            array_splice($this->panier['qte'],$pos,1);
        }

        public function quantite($qte){
            $this->panier['qte']=$qte;
        }

        public function recupere(){
            return $this->panier;
        }
    }
?>