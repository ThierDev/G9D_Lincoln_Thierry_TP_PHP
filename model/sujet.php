<?php

class Sujet extends Model
{

    public $table = "reponse JOIN Personne ON reponse.id_posteur_rep=Personne.id";

    public function get_sujet()
    {

        return $this->find_join(array(

            "order" => "date_rep ASC", 
            "fields" => "sujet.id AS ID,id_posteur AS id_posteur, sujet.date AS date, contenu_msg AS contenu_msg,category AS category, reponse.date_rep AS date_rep, Personne.nom as nom_posteur",
            //"condition" =>"sujet.id=reponse.id_rep"
            
            

        )

        );
    }

    public function get_sujet2()
    {

        return $this->find(array(

            "order" => "date_rep DESC", 
            "fields" => "id_rep,personne.nom AS nom_rep,id_sujet,contenu_rep,id_posteur_rep,date_rep"
            //"condition" =>"sujet.id=reponse.id_rep"
        )

        );
    }
}
