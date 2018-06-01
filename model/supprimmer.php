<?php

class Supprimmer extends Model{

    var $table=' sujet ' ;
    public function supp_rep($a){
        $this->table= 'reponse';
        $this->delrep("$a");
    }
    public function supp_sujet($a){
        
        $this->del("$a");
    }


}


?> 