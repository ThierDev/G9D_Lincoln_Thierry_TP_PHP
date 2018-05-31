<?php 

class Poster extends Controller{
    
    
    function index(){
        $this->render('poster');
    }
    function send(){
        Session::init();
        $this->loadModel('sujet_post');
        $this->sujet_post->get_post_sujet();
        
    }
    
    function repondre(){
        Session::init();
        $this->loadModel('reponse_post');
        
        $d=$_POST;
        
        $semicolumn="'";
        $column='"';
        $temps=$d["contenu_rep"];
        $d["contenu_rep"]= str_replace($semicolumn,$column,$temps); // ceci est une douille pour ne pas avoir de ' dans ma requete sql
        $d["id_posteur_rep"]=Session::get('user_id');
        print_r($d);
        $this->reponse_post->post_reponse($d);
    }
}


?>