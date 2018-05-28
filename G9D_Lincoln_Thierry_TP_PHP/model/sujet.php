<?php

class Sujet extends Model
{

    public $table = "sujet";

    public function get_sujet()
    {

        return $this->find(array(

            "order" => "id ASC",
            "fields" => "contenu_msg,nom_posteur,date,category"
            
            

        )

        );
    }
}
