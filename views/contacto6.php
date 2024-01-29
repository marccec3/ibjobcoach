<?php

  $servidor = "51.161.34.107";
  $usuario = "jun21cod_ibvirtual2";
  $password = "powerful@doom4d";
  $db="jun21cod_proyecto_ibvirtual";

 $conexion = new PDO("mysql:host=$servidor;dbname=$db", $usuario, $password);    

  $posicion = $_POST['posicion'];
  $meses = $_POST['meses'];
  $valor = $_POST['valor'];

  // Prepare
$stmt = $conexion->prepare("INSERT INTO pago2 (posicion, meses, valor) VALUES ('$_POST[posicion]', '$_POST[meses]', '$_POST[valor]')");
// Bind
$stmt->bindParam(':posicion', $posicion);
$stmt->bindParam(':meses', $meses);
$stmt->bindParam(':valor', $valor);
// Excecute
$stmt->execute();

 $meses = $_POST['meses'];
  $dinero = $_POST['dinero'];
  // Prepare
$stmt = $conexion->prepare("INSERT INTO pago3 (meses, dinero) VALUES ('$_POST[meses]', '$_POST[dinero]')");
// Bind
$stmt->bindParam(':meses:', $meses);
$stmt->bindParam(':dinero', $dinero);
// Excecute
$stmt->execute();


 $nom = $_POST['nom'];
  $last_name = $_POST['last_name'];
  $correo = $_POST['correo'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];
  $cupon = $_POST['cupon'];

  // Prepare
$stmt = $conexion->prepare("INSERT INTO pago1 (nom, last_name, correo, password, phone, cupon) VALUES ('$_POST[nom]', '$_POST[last_name]', '$_POST[correo]', '$_POST[password]', '$_POST[phone]', '$_POST[cupon]')");
// Bind
$stmt->bindParam(':nom:', $nom);
$stmt->bindParam(':last_name', $last_name);
$stmt->bindParam(':correo', $correo);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':cupon', $cupon);
// Excecute
$stmt->execute();




?>