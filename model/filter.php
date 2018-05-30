
<?php

class Filter extends Model
{

    var $table = 'sujet';
    

    public function filtre($a)
    {
        $condition="";
        foreach ($a as $key => $value) {
            if($key!="date"){$condition .= "$key='$value' AND ";}else{$condition.="$key>'$value' ";}
        }
        
        
        return $d = $this->find(array(
            "order" => "id DESC",
            "condition" => $condition
            
        ));
    }
}

?>