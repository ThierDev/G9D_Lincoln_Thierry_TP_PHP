<?php

class Sujet_Post extends Model{
    var $table=' sujet';


    function get_post_sujet(){
        $d=$_POST;

        $this->save($d);
        header(WEBROOT.'index.php?p=TPphp');

    }
    

}
?>