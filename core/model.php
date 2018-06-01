<?php

class Model
{

    public $id;
    var $table;

    function read($fields = null)
    {
        if ($fields == null) {
            $fields = "*";
        }
       
        $sql = "SELECT $fields FROM " . $this->table . " WHERE id=" . $this->id;
        
        $req=mysqli_query($GLOBALS['db'],$sql) or die(mysqli_error($GLOBALS['db']) . "<br/> =>" . mysqli_query($GLOBALS['db'],$sql)); // on revoie aussi la query qui a été faite pour débugger si besoin
        $data = mysqli_fetch_assoc($req);
        
        
        foreach ($data as $k => $v) {
            $this->$k = $v;
        }
    }

    static function load($name) // petite fonction sympathique qui permet de charger le bon .php en fonction de la BDD que l'on veut importer/instancier.
    {
        require (ROOT."$name.php");
        return new $name();
        
        ;
    }

    function save($data)
    {
        
        if (isset($data['id']) && empty($data['id'])) {
            $sql = "UPDATE" . $this->table . "SET";
            
            foreach ($data as $k => $v) {
                if ($k != "id") {
                    $sql .= "$k='$v',";
                }
                $sql = substr($sql, 0, - 1);
                $sql = "WHERE id=" . $data["id"];
            }
            
        } else {

            $sql = "INSERT INTO " . $this->table . " (";
            
            unset($data["id"]);
            foreach ($data as $k => $v) {
                $sql .= "$k,";
            }

            
            $sql = substr($sql, 0, - 1);
            
            $sql .= ") VALUES (";
            foreach ($data as $v) {
                $sql .= "'$v',";
            }
            
            
            $sql = substr($sql, 0, - 1);
            $sql .= ")";

        }
        
        
        mysqli_query($GLOBALS['db'],$sql) or die(mysqli_error($GLOBALS['db']) . "<br/> =>" . mysqli_query($GLOBALS['db'],$sql)); // on revoie aussi la query qui a été faite pour débugger si besoin
        /*
        if (! isset($data["id"])) {
            
            $this->id = mysqli_insert_id();
        } else {
            $this->id = $data["id"];
        }
        */
    }
    
    function find_join($data = array())
    {
        $condition = "1=1";
        $fields = "*";
        $limit = "";
        $order = "id DESC"; // DESC par défault, ASC si on veut modifier.
        
        if (isset($data["condition"])) {
            $condition = $data["condition"];
        }
        if (isset($data["fields"])) {
            $fields = $data["fields"];
        }
        if (isset($data["limit"])) {
            $limit = $data["limit"];
        }
        if (isset($data["order"])) {
            $order = $data["order"];
        }
        //$sql = "SELECT DISTINCT $fields FROM ".$this->table." ON $condition ORDER BY $order $limit";
        
        //$sql="SELECT * FROM (SELECT DISTINCT $fields FROM sujet LEFT JOIN reponse ON reponse.id_sujet = sujet.id JOIN Personne ON sujet.id_posteur=Personne.id ORDER BY reponse.date_rep DESC) AS subquery GROUP BY contenu_msg ORDER BY subquery.`date_rep` DESC";
        $sql="SELECT * FROM (SELECT DISTINCT $fields FROM sujet LEFT JOIN reponse ON reponse.id_sujet = sujet.id JOIN Personne ON sujet.id_posteur=Personne.id ORDER BY reponse.date_rep DESC) AS subquery WHERE $condition GROUP BY contenu_msg ORDER BY subquery.`date_rep` DESC" ;
        
        
        $req=mysqli_query($GLOBALS['db'],$sql) or die(mysqli_error($GLOBALS['db']) . "<br/> =>" . mysqli_query($GLOBALS['db'],$sql)); // on revoie aussi la query qui a été faite pour débugger si besoin
        
        
        
        $d = array();
        while ($data = mysqli_fetch_array($req,MYSQLI_ASSOC)) {
            $d[] = $data;
        }
        return $d;
    }

    function find($data = array())
    {
        $condition = "1=1";
        $fields = "*";
        $limit = "";
        $order = "id DESC"; // DESC par défault, ASC si on veut modifier.
        
        if (isset($data["condition"])) {
            $condition = $data["condition"];
        }
        if (isset($data["fields"])) {
            $fields = $data["fields"];
        }
        if (isset($data["limit"])) {
            $limit = $data["limit"];
        }
        if (isset($data["order"])) {
            $order = $data["order"];
        }
        $sql = "SELECT $fields FROM ".$this->table." WHERE $condition ORDER BY $order $limit";
        
        $req=mysqli_query($GLOBALS['db'],$sql) or die(mysqli_error($GLOBALS['db']) . "<br/> =>" . mysqli_query($GLOBALS['db'],$sql)); // on revoie aussi la query qui a été faite pour débugger si besoin
        $d = array();
        while ($data = mysqli_fetch_array($req)) {
            $d[] = $data;
        }
        return $d;
    }
    
    function del($id=null) {
        if($id==null){$id=$this.$id;}
        $sql="DELETE FROM".$this->table."WHERE id=$id";
        mysqli_query($GLOBALS['db'],$sql) or die(mysqli_error($GLOBALS['db']) . "<br/> =>" . mysqli_query($GLOBALS['db'],$sql)); // on revoie aussi la query qui a été faite pour débugger si besoin
        
    }
    function delrep($id=null) {
        if($id==null){$id=$this.$id;}
        $sql="DELETE FROM".$this->table."WHERE id_rep=$id";
        mysqli_query($GLOBALS['db'],$sql) or die(mysqli_error($GLOBALS['db']) . "<br/> =>" . mysqli_query($GLOBALS['db'],$sql)); // on revoie aussi la query qui a été faite pour débugger si besoin
        
    }
    
}

