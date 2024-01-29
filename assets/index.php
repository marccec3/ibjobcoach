<?php
include_once 'controller/datoperfil.php';
include_once 'admin/config/config.php';

$controller = new datoperfil();
if(!isset($_REQUEST['c'])){
    $controller->index1();
}
else{
    $action= $_REQUEST['c'];
    call_user_func(array($controller,$action));
}
?>