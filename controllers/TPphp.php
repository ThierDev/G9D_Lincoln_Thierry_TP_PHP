<?php

class TPphp extends Controller
{
    public function index()
    {

        $this->loadModel('sujet');
        
        $d['d'] = $this->sujet->get_sujet();
        $this->set($d);
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
        $d['d']=$this->filter->filtre($a);
        $this->set($d);
        $this->render('home');
        
    }

}
