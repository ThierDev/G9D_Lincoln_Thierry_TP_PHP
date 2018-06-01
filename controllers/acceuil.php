
<?php 

class Acceuil extends Controller{
    
    public function __construct(){
        
        Session::init();
        $logged=Session::get("loggedIn");
        if($logged==true){
            Session::destroy();
            header("Refresh:0");
            exit;
        }
    }
    
    
    public function index()
    
    {
        
        $this->render('acceuil');
        //$this->loadModel('inscription');
        
        //$d['d'] = $this->sujet->get_sujet();
        //$this->set($d);
        
    }
    public function inscription(){
        
        $this->loadModel('inscription');
        $this->inscription->exeinscription();
        
    }
    
    public function login(){
        $this->loadModel('login');
        $d=$_POST;
        
        if (isset($d['email']) == true && empty($d['email'] == false)) {
            $email = $d['email'];
            
            
            $erroremail=$this->validateEmail($email); 
            //$this->set_error($error);
            if($erroremail==null && isset($d['mdp'])==true){
                
                
                $pot_error = $this->login->exelogin($d);
                if($pot_error != null){$error['error'] = array("error"=> "$pot_error");$this->set_error($error);}
                $this->index();
                
            }
            else{
                $error['error'] = array("error"=> "$erroremail"." Veuillez fournir un mot de passe");
                $this->set_error($error);
                $this->index();
                
            }
            
            
        }
        else{
            
            $error['error'] = array("error"=>"Veuillez remplir tout les champs néccessaires");
            
            $this->set_error($error);
            $this->index();
            
        }
        
        
        
    }
    
    
    
    
    
}





?>