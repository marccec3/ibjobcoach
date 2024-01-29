<?php
//Leer POST del sistema de PayPal y a�adir �cmd�

$req = 'cmd=_notify-validate';
foreach ($_POST as $key => $value) {
$value = urlencode(stripslashes($value));
$req .= "&$key=$value";
}

//header para el sistema de paypal
$header = "POST /cgi-bin/webscr HTTP/1.0\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
//header para el correo
$headers = 'From: cm.outplacement.coaching@corpibgroup.com' . "\r\n" .
'Reply-To: cm.outplacement.coaching@corpibgroup.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
//Si estamos usando el testeo de paypal:
$fp = fsockopen ('ssl://www.live.paypal.com', 443, $errno, $errstr, 30);
//En caso de querer usar PayPal oficialmente:
//$fp = fsockopen (�ssl://www.paypal.com�, 443, $errno, $errstr, 30);
if (!$fp) {
// ERROR DE HTTP
echo "no se ha aiberto el socket<br/>";
}else{ echo "si se ha abierto el socket<br/>";
fputs ($fp, $header . $req);
while (!feof($fp)) {
$res = fgets ($fp, 1024);
if (strcmp ($res, "VERIFIED") == 0) {//Almacenamos todos los valores recibidos por $_POST.
foreach($_POST as $key => $value){
$recibido.= $key." = ". $value."\r\n";
}//Enviamos por correo todos los datos , esto es solo para que ve�is como funciona

 

//En un caso real acceder�amos a una BBDD y almacenar�amos los datos.
// > Comprobando que payment_status es Completed
// > Comprobando que txn_id no ha sido previamente procesado
// > Comprobando que receiver_email es tu email primario de paypal
// > Comprobando que payment_amount/payment_currency son procesos de pago correctos

 

mail("correo", "NOTIFICACION DE PAGO", $recibido , $headers);
} else if (strcmp ($res, "INVALID") == 0) {
mail("correo", "NOTIFICACION DE PAGO INVALIDA", "invalido",$headers);}
}fclose ($fp);

 

}

 

?>