
<?php

class Filter extends Model
{

    var $table = 'sujet';
    

    public function exefiltre($a)
    {
        $condition="";
        foreach ($a as $key => $value) {
            if($key!="date"){$condition .= "$key='$value' AND ";}else{$condition.="$key>'$value' ";}
        }
        
        
        
        return $d = $this->find_join(array(
            "fields" => "sujet.id AS ID,id_posteur AS id_posteur, sujet.date AS date, contenu_msg AS contenu_msg,category AS category, reponse.date_rep AS date_rep, Personne.nom as nom_posteur",
            "condition" => $condition,
            
        ));
    }
}

?>