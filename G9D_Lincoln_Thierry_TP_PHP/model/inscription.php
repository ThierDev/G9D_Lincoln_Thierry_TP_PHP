
<?php 

class Inscription extends Model{

    var $table='Personne';
    function inscription(){
        $d=$_POST;
        //print_r($d);
        //$nom=$d['nom'];
        //$email=$d['email'];
        $mdp=sha1($d['mdp']);
        $d['mdp']=$mdp;
        //$info_to_send=array();
        //array_push($info_to_send,$nom,$email,$mdp)
        
        
        $this->save($d);

        
    }
}
?>