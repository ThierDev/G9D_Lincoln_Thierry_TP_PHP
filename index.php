<?php
define("WEBROOT", str_replace('index.php', "", $_SERVER['SCRIPT_NAME']));
define("ROOT", str_replace('index.php', "", $_SERVER['SCRIPT_FILENAME']));

require ROOT . 'core/core.php';
require ROOT . 'core/model.php';
require ROOT . 'core/controller.php';
require ROOT . 'core/session.php';

/**Les deux paramètres de base p="lecontrolleur & action="l'action sur la page" */

$params = explode('/', $_GET['p']);

/*$params = array();
$params[0] = htmlspecialchars($_GET['p']);
if(!empty($_GET['action'])){$params[1] = htmlspecialchars($_GET['action']); }



foreach ($_GET as $key => $value) {
    if ($key != "p" && $key != "action") {array_push($params, htmlspecialchars($value));} 
    
}
*/
$controller = $params[0]; // ceci conrrespond au premier élément p="mon controlleur"
$action = isset($params[1]) ? $params[1] : 'index'; //ceci conrrespond au second élément dans les liens /help/action par exemple help.php

require ROOT.'controllers/' . $controller . '.php';
$controller = new $controller();

if (method_exists($controller, $action)) {
    unset($params[0]);unset($params[1]);
    
    call_user_func_array(array($controller, $action), $params);

} else {
    echo 'Error 404: The page you requested do not exist';
}

?>
