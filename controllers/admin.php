<?php

class Admin extends Controller
{
    
    public function __construct(){
        
        Session::init();
        $logged=Session::get("loggedIn");
        $priv =Session::get('admin');
        if($logged==false && $priv=='1'){
            Session::destroy();
            header("login");
            exit;
        }
    }
    
    public function index(){

        $this->loadModel('sujet');
        
        $fixed['fixed'] = $this->sujet->get_sujet();
        $this->set_fixed($fixed);
        $d['d'] = $this->sujet->get_sujet();
        $e['e']=$this->sujet->get_sujet2();
        $this->set($d);
        $this->set2($e);
        print_r($d);
        
        $this->render('home_admin');
    }

    public function sujet_post()
    {
        $this->loadModel('sujet_post');
        $this->sujet_post->get_post_sujet();
    }
 

    
    public function supprimer(){
        $this->loadModel('sujet');

        $fixed['fixed'] = $this->sujet->get_sujet();
        $this->set_fixed($fixed);
        $d['d'] = $this->sujet->get_sujet();

        $a=$_POST;
        print_r($a);

        $this->loadModel('supprimmer');
        if(isset($a['supp_sujet'])==true){

            $this->supprimmer->supp_sujet($a['supp_sujet']);

        }


       
       /*
        $e['e']=$this->sujet->get_sujet2();
        $this->set($d);
        $this->set2($e);
        $this->render('home_admin');

        */
        
    }

    

}