<?php
include_once '../controller/dato.php';
include_once '../config/config.php';
$controller = new dato();
if(!isset($_REQUEST['c'])){
    $controller->tabla();
}
else{
    $action= $_REQUEST['c'];
    call_user_func(array($controller,$action));
}
?>