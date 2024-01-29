<?php 
session_start();

// var_dump($_SESSION,$_POST);
// exit;

$email = $_POST['login-email'];
$contraseña = $_POST['login-password'];
// $_SESSION['username'] = $email;

if (sizeof($_SESSION)>1) {
	if ($email == $_SESSION["username"] && $contraseña == $_SESSION["password"] ) {
		$_SESSION['autorizado'] = true;
	 	session_regenerate_id();

	 	header("Location: ../assets/index.php");
	}
}
