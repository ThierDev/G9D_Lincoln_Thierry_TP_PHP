
<?php

class Filter extends Model
{

    var $table = 'sujet';

    public function filtre($a)
    {
        foreach ($a as $key => $value) {
            $condition .= "$key='$value' AND ";
        }
        substr($condtion, 0,-4);
        return $d = $this->find(array(
            "order" => "id DESC",
            "condition" => $condition
            
        ));
    }
}

?>