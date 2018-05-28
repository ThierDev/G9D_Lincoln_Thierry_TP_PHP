<?php 

/*
try
{
    $db = new PDO('mysql:host=localapp;dbname=virifocus;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
*/

    
    $db=mysqli_connect("localhost","root","","tpforum");
    mysqli_set_charset($db,"utf8");
 
    


?>


