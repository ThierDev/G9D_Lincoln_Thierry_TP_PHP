<?php


class Sujet_Post extends Model{
    var $table=' sujet';


    function get_post_sujet(){
        $d=$_POST;
        
        $semicolumn="'";
        $column='"';
        $temps=$d["contenu_msg"];
        $d["contenu_msg"]= str_replace($semicolumn,$column,$temps); // ceci est une douille pour ne pas avoir de ' dans ma requete sql
        $d["id_posteur"]=Session::get('user_id');
        //print_r($d["nom_posteur"]);
        $this->save($d);
        header('location: ../actualite');
        exit;

    }
    

}
?>