<?php

class Actualite extends Controller
{
    
    public function __construct(){
        
        Session::init();
        $logged=Session::get("loggedIn");
        if($logged==false){
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
        
        $this->render('home');
    }

    public function sujet_post()
    {
        $this->loadModel('sujet_post');
        $this->sujet_post->get_post_sujet();
    }
    public function inscription()
    {
        $this->loadModel('inscription');
        
        //$this->inscription->inscription();
    }
    public function news_sub()
    {
       
        if (isset($_POST['email']) == true && empty($_POST['email'] == false)) {
            $email = $_POST['email'];

            $error=$this->validateEmail($email);
            $this->set_error($error);
            $this->index();
            
            


        }
        else{

        }
        
    }
    
    public function filter(){
        $this->loadModel('filter');
        $a=$_POST;
        $this->loadModel('sujet');
        $d['d']=$this->filter->exefiltre($a);
        $e['e']=$this->sujet->get_sujet2();
        $this->set($d);
        $this->set2($e);
        $this->render('home');
        
    }

}
