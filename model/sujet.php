<?php

class Sujet extends Model
{

    public $table = "sujet JOIN reponse";

    public function get_sujet()
    {

        return $this->find_join(array(

            "order" => "date_rep DESC", 
            "fields" => "id,id_rep,reponse.contenu_msg,nom_posteur,category,nom_posteur_rep,date,date_rep",
            "condition" =>"sujet.id=reponse.id_rep"
            
            

        )

        );
    }
}
