
<?php 


class Reponse_post extends  Model{
    var $table ='reponse';
    
    public function post_reponse($d){
        
        
        $this->save($d);
        
        header('location: ../actualite');
        exit;
        
        
        
    }
    
}


?>