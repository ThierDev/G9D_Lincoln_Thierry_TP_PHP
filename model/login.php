<?php 

class Login extends Model{
    
    var $table =' Personne ';
    public function exelogin($d){
        
        Session::init();
        $email=$d['email'];
        
        $r=$this->find(array(
            
           "condition" => "email='$email'",
           "fields"=>"id,mdp,nom"
            
        ));
        
        
        if(isset($r[0])==true){        
            if($r[0]['mdp']== sha1($d['mdp'])){
                
                Session::set('loggedIn', true);
                Session::set('user',$r[0]['nom']);
                Session::set('user_id',$r[0]['id']);
                
                header('location: ../actualite');
                exit;
            
            }
            
            else{
                Session::destroy();
                return "Mot de passe invalide";
                
                
            }
        }else{
            Session::destroy();   
            return "Email ou mot de passe invalide";
            
            
        }
        
        
    }
    
}


?>