<?php 

class Login extends Model{
    
    var $table =' Personne ';
    
    public function exelogin($d){
        
        Session::init();
        $email=$d['email'];
        $r=$this->find(array(
            
           "condition" => "email='$email'",
           "fields"=>"id,mdp"
            
        ));
        
        
        
        
        if($r[0]['mdp']== sha1($d['mdp'])){
            
            Session::set('loggedIn', true);
            header('location: ../actualite');
            exit;
        
        }
        else{
            
            print("Email ou mot de passe invalide");
            Session::destroy();
            
        }
        
        
    }
    
}


?>